<?php
declare(strict_types=1);

namespace Sportires\SyncProducts\Api;

interface SyncstockManagementInterface
{

   /**
     * POST for webhook api
     * @param mixed $data
     * @return array
     */
    public function postSyncstock($data);
}

