<?php
namespace T3G\AgencyPack\Blog\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class Post
 */
class Post extends AbstractEntity
{
    /**
     * The blog post title
     *
     * @var string
     */
    protected $title;

    /**
     * The blog post abstract (SEO, list if not empty)
     *
     * @var string
     */
    protected $abstract;

    /**
     * The blog post description (SEO, list if not empty)
     *
     * @var string
     */
    protected $description;

    /**
     * The blog post creation date
     *
     * @var \DateTime
     */
    protected $crdate;

    /**
     * The blog post categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3G\AgencyPack\Blog\Domain\Model\Category>
     */
    protected $categories;

    /**
     * Comments active flag for this blog post
     *
     * @var bool
     */
    protected $commentsActive;

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->initObjectStorage();
    }

    /**
     * init object storages
     */
    public function initObjectStorage()
    {
        $this->categories = new ObjectStorage();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return ObjectStorage
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ObjectStorage $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param Category $category
     * @return $this
     */
    public function addCategory(Category $category)
    {
        $this->categories->attach($category);
        return $this;
    }

    /**
     * @param Category $category
     * @return $this
     */
    public function removeCategory(Category $category)
    {
        $this->categories->detach($category);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param \DateTime $crdate
     * @return $this
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCommentsActive()
    {
        return $this->commentsActive;
    }

    /**
     * @param bool $commentsActive
     */
    public function setCommentsActive($commentsActive)
    {
        $this->commentsActive = $commentsActive;
    }
}