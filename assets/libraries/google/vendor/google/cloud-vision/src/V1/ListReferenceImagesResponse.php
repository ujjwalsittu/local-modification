<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the `ListReferenceImages` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ListReferenceImagesResponse</code>
 */
class ListReferenceImagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of reference images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ReferenceImage reference_images = 1;</code>
     */
    private $reference_images;
    /**
     * The maximum number of items to return. Default 10, maximum 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\ReferenceImage[]|\Google\Protobuf\Internal\RepeatedField $reference_images
     *           The list of reference images.
     *     @type int $page_size
     *           The maximum number of items to return. Default 10, maximum 100.
     *     @type string $next_page_token
     *           The next_page_token returned from a previous List request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of reference images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ReferenceImage reference_images = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferenceImages()
    {
        return $this->reference_images;
    }

    /**
     * The list of reference images.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ReferenceImage reference_images = 1;</code>
     * @param \Google\Cloud\Vision\V1\ReferenceImage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferenceImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ReferenceImage::class);
        $this->reference_images = $arr;

        return $this;
    }

    /**
     * The maximum number of items to return. Default 10, maximum 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return. Default 10, maximum 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The next_page_token returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

