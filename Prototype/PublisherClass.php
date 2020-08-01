<?php

namespace Prototype;


class Publisher 
{
    private $id;

    private $name;

    private $createdAt;

    private $article;

    private $tags;

    public function __construct($id, $name, $article, $tags)
    {
    	$this->setId($id)
    		 ->setName($name)
    		 ->setArticle($article)
    		 ->setTags($tags)
    		 ->setCreatedAt(new \DateTime('now'));
    }

    /**
     * @param type $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param type $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param type $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

	/**
  	 * @param type $article
  	 */
  	public function setArticle($article)
  	{
  	    $this->article = $article;
  	    return $this;
  	}  	

	/**
	 * @param type $tags
	 */
	public function setTags($tags)
	{
	    $this->tags = $tags;
	    return $this;
	}

	/**
	 * We use a magic php method __clone where we redefine
	 * the privates properties with convinients values   
	 * */
	public function __clone () {

		$this->setId(++$this->id)
			->setArticle('copy Article')
			->setCreatedAt(new \DateTime('now'));
	} 		
}
	



?>