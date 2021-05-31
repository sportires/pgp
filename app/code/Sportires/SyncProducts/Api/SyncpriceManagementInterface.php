<?php
declare(strict_types=1);

namespace Sportires\SyncProducts\Api;

interface SyncpriceManagementInterface
{

   /**
     * POST for webhook api
     * @param mixed $data
     * @return array
     */
    public function postSyncprice($data);
}

