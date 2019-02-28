<?php


namespace App\Services;


use App\Helpers\dateHelper;
use App\Models\Group;
use App\Models\User;
use App\Models\UserLogin;

class UsersService
{


    public function index($filter = [])
    {

        $aLogins = UserLogin::with('user');

        if (isset($filter['group_id']))
        {
            $aLogins = $aLogins->whereHas('user.groups', function ($query) use ($filter)
            {
                $query->where('group_id', '=', $filter['group_id']);
            });
        }

        if (isset($filter['user_id']))
        {
            $aLogins = $aLogins->where('user_id', $filter['user_id']);
        }
        if (isset($filter['date']))
        {
            $aLogins = $aLogins->where('date', $filter['date']);
        }

        elseif (isset($filter['this_year']))
        {
            $aLogins = $aLogins->whereBetween('date', [dateHelper::startOfYear(), dateHelper::EndOfYear()]);
        }

        elseif (isset($filter['this_week']))
        {
            $aLogins = $aLogins->whereBetween('date', [dateHelper::startOfWeek(), dateHelper::EndOfWeek()]);
        }

        elseif (isset($filter['last_three_month']))
        {
            $aLogins = $aLogins->whereBetween('date', [dateHelper::threeMonthAgo(), dateHelper::today()]);
        }


        $aLogins = $aLogins->orderBy('date', 'ASC')
                           ->get();

        return $aLogins;
    }

    public function getUserGroups()
    {
        return Group::all();

    }

    public function getUsers()
    {
        return User::all();

    }
}
