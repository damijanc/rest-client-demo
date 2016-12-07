<?php

namespace DataAccess\Model;

use JMS\Serializer\Annotation as JMS;

class CustomerListModel
{
    /**
     * @var CustomerModel[]
     *
     * @JMS\Type("array<DataAccess\Model\CustomerModel>")
     * @JMS\SerializedName("data")
     */
    protected $data;

    //************** GENERATED CODE ******************

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }
}
