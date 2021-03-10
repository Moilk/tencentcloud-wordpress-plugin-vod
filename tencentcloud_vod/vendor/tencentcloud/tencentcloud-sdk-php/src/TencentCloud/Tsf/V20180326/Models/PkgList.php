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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取程序包总量
 * @method void setTotalCount(integer $TotalCount) 设置程序包总量
 * @method array getContent() 获取程序包信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(array $Content) 设置程序包信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *包列表
 */
class PkgList extends AbstractModel
{
    /**
     * @var integer 程序包总量
     */
    public $TotalCount;

    /**
     * @var array 程序包信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;
    /**
     * @param integer $TotalCount 程序包总量
     * @param array $Content 程序包信息列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = [];
            foreach ($param["Content"] as $key => $value){
                $obj = new PkgInfo();
                $obj->deserialize($value);
                array_push($this->Content, $obj);
            }
        }
    }
}
