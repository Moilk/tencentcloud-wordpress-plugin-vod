<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPolicyId() 获取策略 id
 * @method void setPolicyId(integer $PolicyId) 设置策略 id
 * @method integer getDetachUin() 获取子账号 uin
 * @method void setDetachUin(integer $DetachUin) 设置子账号 uin
 */

/**
 *DetachUserPolicy请求参数结构体
 */
class DetachUserPolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略 id
     */
    public $PolicyId;

    /**
     * @var integer 子账号 uin
     */
    public $DetachUin;
    /**
     * @param integer $PolicyId 策略 id
     * @param integer $DetachUin 子账号 uin
     */
    function __construct()
    {

    }
    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("DetachUin",$param) and $param["DetachUin"] !== null) {
            $this->DetachUin = $param["DetachUin"];
        }
    }
}
