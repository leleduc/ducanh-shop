<?php
class ducanhOrder
{
    private $_orders = '';
    public function __construct()
    {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'da_orders'; //pkoto_da_orders

        // echo '<pre>';
        // print_r($this->_orders);
        // wp_die();
    }

    public function all()
    {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";
        $items = $wpdb->get_results($sql);
        return $items;
    }

    // Get total display page
    public function panigate($limit = 20)
    {
        global $wpdb;

        $paged = isset($_REQUEST['paged']) ? $_REQUEST['paged'] : 1;

        // pr($_REQUEST);

        $s = isset($_REQUEST['s']) ? $_REQUEST['s'] : '';
        $status = isset($_REQUEST['status']) ? $_REQUEST['status'] : '';



        //Get total record
        $sql = "SELECT count(id) FROM $this->_orders WHERE deleted=0 ";

        //do search
        if ($s) {
            $sql .= " AND (customer_name LIKE '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        //check status    
        if ($status) {
            $sql .= " AND status = '$status' ";
        }

        $total_items = $wpdb->get_var($sql);

        //Thuật toán phân trang
        /*
        Limit: limit
        Tổng số trang: total_pages
        Tính offset
        */
        $total_pages = ceil($total_items / $limit);
        $offset = ($paged * $limit) - $limit;

        $sql = "SELECT * FROM $this->_orders WHERE deleted=0 ";
        //do search
        if ($s) {
            $sql .= " AND (customer_name LIKE  '%$s%' OR customer_phone LIKE '%$s%' )";
        }
        //check status    
        if ($status) {
            $sql .= " AND status = '$status' ";
        }
        $sql .= " ORDER BY id DESC";
        $sql .= " LIMIT $limit OFFSET $offset";

        // var_dump($sql);     //test sql string

        $items = $wpdb->get_results($sql);
        return [
            'total_pages'   => $total_pages,
            'total_items'   => $total_items,
            'items'         => $items
        ];
    }

    //find function
    public function find($id)
    {
        global $wpdb;
        $sql = 'SELECT * FROM $this->_orders WHERE id=$id';

        $item = $wpdb->get_row($sql);
        return $item;
    }

    //save function
    public function save($data)
    {
        global $wpdb;
        $wpdb->insert($this->_orders, $data);
        $last_id = $wpdb->insert_id;

        $item = $this->find($last_id);
        return $item;
    }

    //update function
    public function update($id, $data)
    {
        global $wpdb;
        $wpdb->update($this->_orders, $data, [
            'id' => $id
        ]);

        return true;
    }

    //trash function - move one oder to trash
    public function trash($id)
    {
        global $wpdb;
        $wpdb->update(
            $this->_orders,
            [
                'deleted' => 1
            ],
            [
                'id' => $id
            ]
        );

        return true;
    }

    //delete an order function
    public function destroy($id)
    {
        global $wpdb;
        $wpdb->delete($this->_orders,  [
            'id' => $id
        ]);

        return true;
    }

    //update status order function
    public function change_status($id, $status)
    {
        global $wpdb;
        $wpdb->update(
            $this->_orders,
            [
                'status' => $status
            ],
            [
                'id' => $id
            ]
        );

        return true;
    }
}
