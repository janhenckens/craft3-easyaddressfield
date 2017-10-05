<?php

namespace studioespresso\easyaddressfield\models;

use yii\base\Model;


class EasyAddressFieldModel extends Model {

	public function rules() {
		return [
			[
				[
					'name',
					'street',
					'street2',
					'postalCode',
					'city',
					'country',
					'latitude',
					'longitude',
				],
				'safe',
			],
		];
	}

	/**
	 * Latitude
	 *
	 * @var string
	 */
	public $latitude;

	/**
	 * @return string
	 */
	public function getLatitude(): string {
		return $this->latitude;
	}

	public function toString(): array {
		if(!empty($this->street)) { $data['street'] = $this->street; }
		if(!empty($this->street2)) { $data['street2'] = $this->street2; }
		if(!empty($this->postalCode)) { $data['postalCode'] = $this->postalCode; }
		if(!empty($this->city)) { $data['city'] = $this->city; }
		if(!empty($this->country)) { $data['country'] = $this->country; }

		return $data;
	}

	/**
	 * Longitude
	 *
	 * @var string
	 */
	public $longitude;

	/**
	 * @return string
	 */
	public function getLongitude(): string {
		return $this->longitude;
	}

	/**
	 * The postal code.
	 *
	 * @var string
	 */
	public $postalCode;

	/**
	 * The first line of the street block.
	 *
	 * @var string
	 */
	public $street;

	/**
	 * The second line of the street block.
	 *
	 * @var string
	 */
	public $street2;

	public $name;

	public $country;

	public $city;

}