<?php
class ducanhOrder
{
    private $_orders = '';
    public function __construct()
    {
        global $wpdb;
        $this->_orders = $wpdb->prefix . 'da_orders'; //pkoto_da_orders
    }

    public function all()
    {
        global $wpdb;
        $sql = 'SELECT * FROM $this->_orders';
        $items = $wpdb->get_results($sql);
        return $items;
    }

    // Get total display page
    public function panigate($limit = 20, $paged = 1)
    {
        global $wpdb;

        //Get total record
        $sql = 'SELECT count(id) FROM $this->_orders';
        $total_items = $wpdb->get_results($sql);

        //Thuật toán phân trang
        /*
        Limit: limit
        Tổng số trang: total_pages
        Tính offset
        */
        $total_pages = ceil($total_items / $limit);
        $offset = ($paged * $limit) - $limit;

        $sql = 'SELECT * FROM $this->_orders';
        $sql .= 'ORDER BY id DESC';
        $sql .= 'LIMIT $limit OFFSET $offset';

        $item = $wpdb->get_results($sql);
        return $item;
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

    //delete an order function
    public function destroy($id)
    {
        global $wpdb;
        $wpdb->delete($this->_orders,  [
            'id' => $id
        ]);

        return true;
    }
}
