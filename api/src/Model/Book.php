<?php

namespace App\Model;

use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter\MatchFilter;

/**
 * A book.
 *
 * @ApiResource
 * @ApiFilter(MatchFilter::class, properties={"author", "title"})
 */
class Book
{
    /**
     * @var int The id of this book.
     *
     * @ApiProperty(identifier=true)
     */
    public $id;

    /**
     * @var string|null The ISBN of this book (or null if doesn't have one).
     */
    public $isbn;

    /**
     * @var string The title of this book.
     */
    public $title;

    /**
     * @var string The description of this book.
     */
    public $description;

    /**
     * @var string The author of this book.
     */
    public $author;

    /**
     * @var \DateTimeInterface The publication date of this book.
     */
    public $publicationDate;
}