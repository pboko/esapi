<?php

namespace App\Model;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * A review of a book.
 *
 * @ApiResource
 */
class Review
{
    /**
     * @var int The id of this review.
     *
     * @ApiProperty(identifier=true)
     */
    public $id;

    /**
     * @var int The rating of this review (between 0 and 5).
     */
    public $rating;

    /**
     * @var string the body of the review.
     */
    public $body;

    /**
     * @var string The author of the review.
     */
    public $author;

    /**
     * @var \DateTimeInterface The date of publication of this review.
     */
    public $publicationDate;
}