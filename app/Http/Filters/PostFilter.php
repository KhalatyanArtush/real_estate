<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class
PostFilter extends AbstractFilter
{
    public const KEY = 'key';
    public const TITLE = 'title';
    public const AGENT = 'agent_id';
    public const SUM = 'sum';
    public const BUY_RENT = 'buy_rent_id';
    public const CITY = 'city_id';
    public const VILLAGE = 'village_id';
    public const STREET = 'street_id';
    public const REGION = 'region_id';
    public const TYPE = 'type_id';
    public const BUILDING_TYPE = 'building_type_id';
    public const FLOOR = 'floor';
    public const ROOM = 'room';
    public const SWIMMING = 'swimming';
    public const BUILDING_NUMBER = 'building_number';
    public const APARTMENT_NUMBER = 'apartment_number';
    public const DISTRICT = 'district_id';
    public const TEL = 'tel';
    public const PUBLIC = 'public';
    public const INFORMATIONS = 'informations';


    protected function getCallbacks(): array
    {
        return [
            self::KEY => [$this, 'key'],
            self::TITLE => [$this, 'title'],
            self::AGENT => [$this, 'agent_id'],
            self::SUM => [$this, 'sum'],
            self::BUY_RENT => [$this, 'buy_rent_id'],
            self::CITY => [$this, 'city_id'],
            self::VILLAGE => [$this, 'village_id'],
            self::STREET => [$this, 'street_id'],
            self::REGION => [$this, 'region_id'],
            self::TYPE => [$this, 'type_id'],
            self::BUILDING_TYPE => [$this, 'building_type_id'],
            self::FLOOR => [$this, 'floor'],
            self::ROOM => [$this, 'room'],
            self::SWIMMING => [$this, 'swimming'],
            self::BUILDING_NUMBER => [$this, 'building_number'],
            self::APARTMENT_NUMBER => [$this, 'apartment_number'],
            self::DISTRICT => [$this, 'district_id'],
            self::TEL => [$this, 'tel'],
            self::PUBLIC => [$this, 'public'],
            self::INFORMATIONS => [$this, 'informations'],
        ];
    }

    public function key(Builder $builder, $value)
    {
        $builder->where('key', $value);

    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function sum(Builder $builder, $value)
    {
        $builder->whereBetween($value['firstSum'],$value['endSum']);
    }

    public function agent_id(Builder $builder, $value)
    {
        $builder->where('agent_id', $value);
    }

    public function buy_rent_id(Builder $builder, $value)
    {
        $builder->where('buy_rent_id', $value);
    }

    public function city_id(Builder $builder, $value)
    {
        $builder->where('city_id', $value);
    }
 public function village_id(Builder $builder, $value)
    {
        $builder->where('village_id', $value);
    }
public function street_id(Builder $builder, $value)
    {
        $builder->where('street_id', $value);
    }

    public function region_id(Builder $builder, $value)
    {
        $builder->where('region_id', $value);
    }

    public function type_id(Builder $builder, $value)
    {
        $builder->where('type_id', $value);
    }

    public function building_type_id(Builder $builder, $value)
    {
        $builder->where('building_type_id', $value);
    }

    public function floor(Builder $builder, $value)
    {
        $builder->Where('floor', $value);
    }

    public function room(Builder $builder, $value)
    {
        $builder->where('room', $value);
    }

    public function swimming(Builder $builder, $value)
    {
        $builder->where('swimming', $value);
    }
 public function building_number(Builder $builder, $value)
    {
        $builder->where('building_number', $value);
    }
public function apartment_number(Builder $builder, $value)
    {
        $builder->where('apartment_number', $value);
    }
public function tel(Builder $builder, $value)
    {
        $builder->where('tel', $value);
    }
public function public(Builder $builder, $value)
    {
        $builder->where('public', $value);
    }

    public function informations(Builder $builder, $value)
    {
        $builder->where('informations', 'like', "%{$value}%");
    }

}
