<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const KEY = 'key';
    public const TITLE = 'title';
    public const AGENT = 'agent';
    public const SUM = 'sum';
    public const BUY_RENT = 'buy_rent';
    public const COUNTRY = 'country';
    public const REGION = 'region';
    public const TYPE = 'type';
    public const BUILDING_TYPE = 'building_type';
    public const FLOOR = 'floor';
    public const ROOM = 'room';
    public const SWIMMING = 'swimming';
    public const INFORMATIONS = 'informations';


    protected function getCallbacks(): array
    {
        return [
            self::KEY => [$this, 'key'],
            self::TITLE => [$this, 'title'],
            self::AGENT => [$this, 'agent'],
            self::SUM => [$this, 'sum'],
            self::BUY_RENT => [$this, 'buy_rent'],
            self::COUNTRY => [$this, 'country'],
            self::REGION => [$this, 'region'],
            self::TYPE => [$this, 'type'],
            self::BUILDING_TYPE => [$this, 'building_type'],
            self::FLOOR => [$this, 'floor'],
            self::ROOM => [$this, 'room'],
            self::SWIMMING => [$this, 'swimming'],
            self::INFORMATIONS => [$this, 'informations'],
        ];
    }

    public function key(Builder $builder, $value)
    {
        $builder->where('key', $value);

    }

    public function title(Builder $builder, $value)
    {
        $builder->orWhere('title', 'like', "%{$value}%");
    }

//    public function sum(Builder $builder, $value)
//    {
//        $builder->orwhereBetween('sum', [1, 100]);
//    }

    public function agent(Builder $builder, $value)
    {
        $builder->orWhere('agent', $value);
    }

    public function buy_rent(Builder $builder, $value)
    {
        $builder->orWhere('buy_rent', $value);
    }

    public function country(Builder $builder, $value)
    {
        $builder->orWhere('country', $value);
    }

    public function region(Builder $builder, $value)
    {
        $builder->orWhere('region', $value);
    }

    public function type(Builder $builder, $value)
    {
        $builder->orWhere('type', $value);
    }

    public function building_type(Builder $builder, $value)
    {
        $builder->orWhere('building_type', $value);
    }

    public function floor(Builder $builder, $value)
    {
        $builder->orWhere('floor', $value);
    }

    public function room(Builder $builder, $value)
    {
        $builder->orWhere('room', $value);
    }

    public function swimming(Builder $builder, $value)
    {
        $builder->orWhere('swimming', $value);
    }

    public function informations(Builder $builder, $value)
    {
        $builder->orWhere('informations', 'like', "%{$value}%");
    }

}
