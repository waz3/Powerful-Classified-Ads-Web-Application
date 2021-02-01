<?php
/**
 * LaraClassified - Classified Ads Web Application
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: https://bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Models\Setting;

class CronSetting
{
	public static function getValues($value, $disk)
	{
		if (empty($value)) {
			
			$value['unactivated_posts_expiration'] = '30';
			$value['activated_posts_expiration'] = '30';
			$value['archived_posts_expiration'] = '7';
			$value['manually_archived_posts_expiration'] = '90';
			
		} else {
			
			if (!isset($value['unactivated_posts_expiration'])) {
				$value['unactivated_posts_expiration'] = '30';
			}
			if (!isset($value['activated_posts_expiration'])) {
				$value['activated_posts_expiration'] = '30';
			}
			if (!isset($value['archived_posts_expiration'])) {
				$value['archived_posts_expiration'] = '7';
			}
			if (!isset($value['manually_archived_posts_expiration'])) {
				$value['manually_archived_posts_expiration'] = '90';
			}
			
		}
		
		return $value;
	}
	
	public static function setValues($value, $setting)
	{
		return $value;
	}
	
	public static function getFields($diskName)
	{
		$fields = [
			[
				'name'  => 'cron_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.cron_sep_value'),
			],
			[
				'name'  => 'cron_info_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.cron_info_sep_value'),
			],
			[
				'name'  => 'cron_ads_clear_sep',
				'type'  => 'custom_html',
				'value' => trans('admin.cron_ads_clear_sep_value'),
			],
			[
				'name'  => 'cron_ads_clear_info',
				'type'  => 'custom_html',
				'value' => trans('admin.cron_ads_clear_info_value'),
			],
			[
				'name'              => 'unactivated_posts_expiration',
				'label'             => trans('admin.unactivated_posts_expiration_label'),
				'type'              => 'number',
				'hint'              => trans('admin.unactivated_posts_expiration_hint'),
				'wrapperAttributes' => [
					'class' => 'form-group col-md-6',
				],
			],
			[
				'name'              => 'activated_posts_expiration',
				'label'             => trans('admin.activated_posts_expiration_label'),
				'type'              => 'number',
				'hint'              => trans('admin.activated_posts_expiration_hint'),
				'wrapperAttributes' => [
					'class' => 'form-group col-md-6',
				],
			],
			[
				'name'              => 'archived_posts_expiration',
				'label'             => trans('admin.archived_posts_expiration_label'),
				'type'              => 'number',
				'hint'              => trans('admin.archived_posts_expiration_hint'),
				'wrapperAttributes' => [
					'class' => 'form-group col-md-6',
				],
			],
			[
				'name'              => 'manually_archived_posts_expiration',
				'label'             => trans('admin.manually_archived_posts_expiration_label'),
				'type'              => 'number',
				'hint'              => trans('admin.manually_archived_posts_expiration_hint'),
				'wrapperAttributes' => [
					'class' => 'form-group col-md-6',
				],
			],
		];
		
		return $fields;
	}
}
