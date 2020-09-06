<?php

class restaurantinfo {

    private $list;

    function __construct(array $list) {
        if (sizeof($list)>0) {
            $this->list = $list;
        } else {
            throw new Exception("Empty");
        }
    }

    public function getName() {

        foreach($this->list as $l) {
            $rname[] = array(
                "id"=>$l['id']
            );
        }

        return json_encode($rname);
    }

    public function getDetails($id) {
        $response = ["Invalid"];

        if ($id) {
            foreach ($this->list as $l) {
                if ($l['id'] == $id) {
                    $response = $l;
                    break;
                }
            }
        }
        return json_encode($response);
    }
}

?>