<?php

namespace directapi\services\adgroups\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdGroupUpdateItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var string
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;

    /**
     * @var int[]
     */
    public $RegionIds;

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     */
    public $NegativeKeywords;

    /**
     * @var string
     * @Assert\Length(max="1024")
     */
    public $TrackingParams;

    /**
     * @var MobileAppAdGroupUpdate
     * @Assert\Valid()
     */
    public $MobileAppAdGroup;

    /**
     * @var DynamicTextAdGroupUpdate
     * @Assert\Valid()
     */
    public $DynamicTextAdGroup;
}