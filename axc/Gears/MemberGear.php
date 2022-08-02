<?php

namespace axc\Gears;

use App\Models\Member;
use App\Models\product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * MerchantGear
 */
class MemberGear extends Facade
{
    protected static function getFacadeAccessor()
    {
        return MemberMethods::class;
    }
}
// Methods Class
class MemberMethods
{
    protected $memberModel;
    /**
     * Method __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->productModel = new Member();
    }
    /**
     * Method all
     *
     * @return ?Collection
     */
    public function all(): ?Collection
    {
        return $this->memberModel->all();
    }
    /** Method own
     *
     * @param Array $params [Parameters Array]
     * @param Int $type [config('systemSettings.OWN_TYPES.SINGLE')]
     * @param Int $paginate [Paginate count if needed]
     *
     * @return mixed
     */
    public function own($params, $type = 1, $paginate = 6): mixed
    {
        return $this->memberModel->own($params, $type, $paginate);
    }
    /**
     * find
     *
     * @param  mixed $id
     * @return member
     */
    public function find(int $id): ?Member
    {
        return $this->productModel->findOrFail($id);
    }
    /**
     * findOnly
     *
     * @param  mixed $id
     * @return member
     */
    public function findOnly(int $id): ?Member
    {
        return $this->productModel->find($id);
    }
    /**
     * exists
     *
     * @param  mixed $id
     * @return Bool
     */
    public function exists(int $id): Bool
    {
        return $this->memberModel->exists($id);
    }
    /**
     * get
     *
     * @param  mixed $ids
     * @return Collection
     */
    public function get(array $ids): ?Collection
    {
        return $this->memberModel->getByIds($ids);
    }
    /**
     * firstOrCreate
     *
     * @param  mixed $params
     * @return member
     */
    public function firstOrCreate(array $params): Member
    {
        return $this->memberModel->firstOrCreate($params);
    }
    /**
     * create
     *
     * @param  mixed $data
     * @return member
     */
    public function create(array $data): Member
    {
        return $this->productModel->create($data);
    }
    /**
     * update
     *
     * @param  mixed $Customer
     * @param  mixed $data
     * @return Bool
     */
    public function update(Member $member, array $data): Bool
    {
        return $member->update(array_merge($member->toArray(), $data));
    }
    /**
     * delete
     *
     * @param  mixed $Customer
     * @return bool
     */
    public function delete(Member $member): ?bool
    {
        return $member->delete();
    }
}
