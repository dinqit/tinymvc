<?php

/** returns the public vars of an object */ 
function get_public_object_vars($object){
	return $object !==null ?  get_object_vars($object): array();
}

class DatabaseObject{
	
	/** Finds all records at once*/
	static public function find_all(){
		global $db;
		$sql  = "SELECT * FROM ".static::$table." WHERE 1";
		$result  = self::find_by_sql($sql);
		return $result;
	}
	
	/** Finds records by id if given */
	static public function find_by_id($id = ''){
		global $db;
		$sql  = "SELECT * FROM ".static::$table." WHERE id = {$id}";
		$result  = self::find_by_sql($sql);
		return !empty($result) ? array_shift($result) : false;	
	}
	
	/** Finds records by sql statement  */
	static public function find_by_sql($sql=''){
		global $db;
		$result  = $db->query($sql);
		$object_array = array();
		if($result->num_rows){
			while($row = $result->fetch_assoc()){		
				$object_array[] = self::instantiate($row);
			}
		}else{
			die($db->error);	
		}
		return $object_array;
		$result->free;
	}
	
	/** instantiates an object according to the fields in the database*/
	static public function instantiate($row){
		$class_name = get_called_class();
		$object = new $class_name;
		$object->db_fields = get_public_object_vars($object);
		foreach($row as $attribute=>$value){
			if($object->has_attribute($object,$attribute)){
				$object->$attribute = $value;
			}	
		}
		return $object;
	}
	
	/** Checks if a attribute exists return false or true  */
	private function has_attribute($object, $attribute){	
		return array_key_exists($attribute,get_public_object_vars($object));
	}
	
	/** Turns a selection to a pagination */
	public static function paginate($pagination){
		$object_array = static::select_distinct($pagination->per_page,$pagination->offset());
		return $object_array;
	}
	
	/** Selects records according to a given limit */
	public static function select_distinct($limit,$offset){
		global $db;
		$table_name= static::TABLE_NAME;
		$sql = "SELECT * FROM {$table_name} ";
		$sql .= "LIMIT {$limit} ";
		$sql .= "OFFSET {$offset}";
		$object_array = static::find_by_sql($sql);
		return $object_array;
	}
	
	/** returns the sum of all records in the database*/
	public static function count_all(){
		global $db;
		$table_name= static::TABLE_NAME;
		$sql = "SELECT COUNT(*) AS NUM FROM {$table_name}";
		$result = $db->query($sql);
		$row= $db->fetch_array($result);
		return $row['NUM'];
	}
	
	/** Checks to see if anything is saved and saves it .*/
	public function save(){
			if(isset($this->id)){
				$this->update();
			}else{
				$this->create();
			}
	}
	
	/** Updates the database table by id*/ 
	public function update(){
		global $db;
		$table_name = static::TABLE_NAME;
		$id= $this->id;
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".$table_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=". $db->real_escape_string($this->id);
		$db->query($sql);
		$result = $db->query($sql);
		return $result ? $db->affected_rows: false ;
		
	}
	
	/** Creates a new user and adds it to the database */
	public function create(){
			global $db;
			$table_name = static::TABLE_NAME;
			foreach ($this->attributes() as $attribute => $key){
				$sql = "INSERT INTO {$table_name} ";
				$sql .= "(";
				$sql .= join(", ",array_keys($this->sanitized_attributes()));
				$sql .= ")";
				$sql .= " VALUES ('"; 
				$sql .= join("', '",array_values($this->sanitized_attributes()));  
				$sql .= "')";			
			}
			$result = $db->query($sql);
			if($db->query($sql) === TRUE){
					$this->id = $db->insert_id;
					return $db->insert_id;
			}else{
					return false;//echo 'Not done';
			}
	}
	
	/** Deletes a record from the database based on the id */
	public function delete(){
		global $db;
		$table_name = static::TABLE_NAME;
		$id=$this->id;
		$sql  = "DELETE FROM {$table_name} WHERE id = '{$id}'";
		return $result = $db->query($sql) ? $db->affected_rows($result): false ;
	}
	
	/** Returns the attributes from the called class  */
	protected function attributes() { 
		// return an array of attribute names and their values
	  $attributes = array();
	  foreach(static::$db_fields as $field) {
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
	    }
	  }
	  return $attributes;
	}
	
	/** Sanitizes the attributes from the called class*/
	protected function sanitized_attributes() {
	  global $db;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $db->real_escape_string($value);
	  }
	  return $clean_attributes;
	}
	
	/** gets the fields form the database */
	public function get_db_fields(){
		global $db;
		$table_name = static::TABLE_NAME;
		$result = $db->query("SHOW COLUMNS FROM {$table_name}");
		$num = $result->num_rows ;//$db->num_rows($result);
		if (!$result) {
				exit;
			}
				$columns = array();
				if ($num > 0) {
				while ($row = $result->fetch_array()) {
					//foreach($row as $k){
						//$columns[] = $k;
						if(property_exists($this,$row[0])){
							$columns[] = $row[0];
						}
					//}
				}
		}
		return $columns;
	}
	
	/** returns the db_fields form called class*/
	public function get_fields(){
			return $this->attributes();
	}
}