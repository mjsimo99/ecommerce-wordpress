<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/campaign_experiment_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Errors;

class CampaignExperimentError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v12/errors/campaign_experiment_error.protogoogle.ads.googleads.v12.errors"�
CampaignExperimentErrorEnum"�
CampaignExperimentError
UNSPECIFIED 
UNKNOWN
DUPLICATE_NAME
INVALID_TRANSITION/
+CANNOT_CREATE_EXPERIMENT_WITH_SHARED_BUDGET6
2CANNOT_CREATE_EXPERIMENT_FOR_REMOVED_BASE_CAMPAIGN3
/CANNOT_CREATE_EXPERIMENT_FOR_NON_PROPOSED_DRAFT%
!CUSTOMER_CANNOT_CREATE_EXPERIMENT%
!CAMPAIGN_CANNOT_CREATE_EXPERIMENT)
%EXPERIMENT_DURATIONS_MUST_NOT_OVERLAP	8
4EXPERIMENT_DURATION_MUST_BE_WITHIN_CAMPAIGN_DURATION
*
&CANNOT_MUTATE_EXPERIMENT_DUE_TO_STATUSB�
#com.google.ads.googleads.v12.errorsBCampaignExperimentErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/errors;errors�GAA�Google.Ads.GoogleAds.V12.Errors�Google\\Ads\\GoogleAds\\V12\\Errors�#Google::Ads::GoogleAds::V12::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

