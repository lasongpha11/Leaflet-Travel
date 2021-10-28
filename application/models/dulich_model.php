<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class dulich_model extends CI_Model {
        const TABLE_NAME = 'booking2';
        const PRI_INDEX = 'id';
        public function get($where = NULL)
        {
            $this->db->select('*');
            $this->db->from(self::TABLE_NAME);
            if($where !== NULL) {
                if(is_array($where)){
                    foreach ($where as $field => $value) {
                        $this->db->where($field, $value);
                    }
                }else {
                    $this->db->where(self::PRI_INDEX, $where);
                }
            }
            $result = $this->db->get();
            $result = $result->result_array();
            if($result) {
                if($where !== NULL) {
                    return array_shift($result);
                }else {
                    return $result;
                }
            }else {
                return false;
            }
        }
        public function insert(Array $data)
        {
            if($this->db->insert(self::TABLE_NAME, $data)){
                return $this->db->insert_id();
            }else {
                return false;
            }
        }
        public function delete($where = array())
        {
            if(!is_array($where)) {
                $where = array(self::PRI_INDEX => $where);
            }
            $this->db->delete(self::TABLE_NAME, $where);
            return $this->db->affected_rows();
        }
        // 
        public function tatcadulieu()
        {
            return $this->db->count_all('booking2');
        }
        public function get2($layrabaonhieu, $tudulieusobaonhieu)
        {
            $dl = $this->db->get('booking2', $layrabaonhieu, $tudulieusobaonhieu);
            $dl = $dl->result_array();
            return $dl;
        }
    }
?>