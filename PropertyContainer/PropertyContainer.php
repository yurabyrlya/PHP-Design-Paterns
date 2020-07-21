
<?php


 interface PropertyContainerInteface {

 	public function addProperty($propertyName, $value);

 	
 	public function deleteProperty($propertyName);

 	
 	public function getProperty($propertyName);

 	
 	public function setProperty($propertyName, $value);

 }



/**
 * class PropertyContainer
 * the Class introduce a Property Container Pattern 
 */
class PropertyContainer  implements PropertyContainerInteface
{

	private  $PropertyContainer = [];

 	public function addProperty($propertyName, $value){

 		$this->PropertyContainer[$propertyName] = $value;

 	}

 	public function deleteProperty($propertyName){

 		unset($this->PropertyContainer[$propertyName]);

 	}


 	public function getProperty($propertyName){

 		return $this->PropertyContainer[$propertyName] ?? null;

 	}

 	public function setProperty($propertyName, $value){

 		if (!isset($this->PropertyContainer[$propertyName])){

 			throw new Exception("Property [{$propertyName}] not found");
 					
 		}		
 		$this->PropertyContainer[$propertyName] = $value;

 	}
	

}

?>