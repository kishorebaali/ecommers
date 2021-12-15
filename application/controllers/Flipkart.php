<?php
defined('BASEPATH') or exit('No direct script access allowed');

class flipkart extends CI_Controller
{



    public function index()
    {
        $this->load->view('fhome');
    }

    public function register()
    {
        $this->load->view('fregister');
    }

    public function new($id = '')
    {
        if ($id) {
            $result['products'] = $this->db->where('id', $id)->get('products')->result();
        } else {
            $result['products'] = $this->db->get('products')->result();
        }
        echo json_encode($result);
    }


    public function registeruser()
    {
        $data = [
            'name' => $this->input->POST('name'),
            'email' => $this->input->POST('email'),
            'password' => $this->input->POST('password')
        ];

        $result = $this->db->insert('user', $data);
    }

    public function login()
    {
        $this->load->library('session');

        $name = $this->input->POST('name');
        $password = $this->input->POST('password');
        $query = $this->db->where([
            "name" => $name,
            "password" => $password
        ]);


        $result = $query->get("user")->row();

        if ($result == null) {
            echo "Invalid credentials";
        } elseif ($this->db->where('name', $name)->where('password', $password)->where('role', 1)->get('user')->result()) {
            $_SESSION["id"] = $result->id;
            $_SESSION["name"] = $result->name;

            redirect(base_url() . "flipkart/admin");
        } else {

            $_SESSION["id"] = $result->id;
            $_SESSION["name"] = $result->name;
            redirect(base_url() . "flipkart/user");
        }
    }

    public function admin()
    {
        // $result['user'] = $this->db->get('user')->result();
        $this->load->view('fadmin');
    }
    public function addproduct()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('Pimage')) {

            $data = [
                'Pname' => $this->input->POST('Pname'),
                'Pprice' => $this->input->POST('Pprice'),
                'Pdesc' => $this->input->POST('Pdesc'),
                'Pimage' => $this->upload->data('file_name'),
                "userid" => $this->session->id
            ];


            $result = $this->db->where("userid", $this->session->id)->insert('products', $data);
            if ($result) {
                echo "success";
            } else {
                echo "fail";
            }
            redirect(base_url() . "flipkart/products");
        } else {

            $data = [
                'Pname' => $this->input->POST('Pname'),
                'Pprice' => $this->input->POST('Pprice'),
                'Pdesc' => $this->input->POST('Pdesc'),
            ];

            $result = $this->db->insert('products', $data);
            if ($result) {
                echo "success";
            } else {
                echo "fail";
            }
            redirect(base_url() . "flipkart/products");
        }
    }

    public function products()
    {

        $result['products'] = $this->db->get('products')->result();
        $this->load->view('fproducts', $result);
    }

    public function user()
    {

        $result['products'] = $this->db->get('products')->result();
        $this->load->view('fuser', $result);
    }
    public function addtocart()
    {

        $data = [
            "uid" => $this->session->id,
            "pid" => $this->input->get('pid'),
            "quantity" => $this->input->get('quantity')
        ];

        $tst = $this->db->where(["uid" => $this->session->id, "pid" => $data['pid']])->get('cart')->row();

        if ($tst) {
            $q = $tst->quantity + $data["quantity"];
            $this->db->where("id", $tst->id)->update("cart", ["quantity" => $q]);
        } else {

            $this->db->insert("cart", $data);
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function users()
    {

        $result['user'] =  $this->db->get('user')->result();
        $this->load->view('fusers', $result);
    }

    public function deletefromcart($id)
    {
        $this->db->where('id', $id)->delete("cart");

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function qdec($id)
    {
        $r = $this->db->where("id", $id)->get('cart')->row();
        if ($r->quantity - 1 != 0) {
            $this->db->where("id", $id)->update("cart", ["quantity" => $r->quantity - 1]);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function qinc($id)
    {
        $r = $this->db->where("id", $id)->get('cart')->row();
        if ($r->quantity + 1 <= 5) {
            $this->db->where("id", $id)->update("cart", ["quantity" => $r->quantity + 1]);
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    public function orders()
    {
        $this->load->view("orders");
    }
    public function placeorder()

    {
        $total = $this->input->get("total");
        $address = $this->input->get("address");


        $orderid =  date("Ymds");
        $this->db->insert("orders", [
            "order_id" => $orderid, "uid" => $this->session->id,  "total" => $total, "address" => $address,
            "pay_method" => "COD", "status" => "Not delivered yet"
        ]);

        $cart = $this->db->where("uid", $this->session->id)->get("cart")->result();
        foreach ($cart as $c) {
            $this->db->insert("ordereditems", ["orderid" => $orderid, "pid" => $c->pid, "quantity" => $c->quantity]);
            $this->db->where("id", $c->id)->delete("cart");
        }
        redirect(base_url() . "flipkart/orders");
    }
    public function orderdetails($id)
    {
        $result = $this->db->where('orderid', $id)->get("ordereditems")->result();

        echo "<center>Orderid-$id<table border=1>";
        echo "<tr>";
        echo "<td> Name</td>";
        echo "<td> Price</td>";
        echo "<td> Quantity</td>";
        echo "<td> Total price</td>";
        echo "</tr>";
        foreach ($result as $row) {
            $row2 = $this->db->where("id", $row->pid)->get("products")->row();
            echo "<tr>";
            echo "<td>" . $row2->Pname . "</td>";
            echo "<td>" . $row2->Pprice . "</td>";
            echo "<td><center>" . $row->quantity . "</td>";
            echo "<td>" . $row2->Pprice * $row->quantity . "</td>";
            echo "</tr>";
        }
        $row3 = $this->db->where("order_id", $id)->get("orders")->row();
        echo "<tr>";
        echo "<td colspan='3'>Order Total</td>";
        echo "<td>" . $row3->total . "</td>";
        echo "</tr>";
        echo "</table></center>";
    }
    public function deleteproducts()
    {
        $id = $this->input->get('id');
        $result = $this->db->where('id', $id)->delete('products');
        if ($result) {
            echo "delete success";
            redirect(base_url() . "flipkart/products");
        }
    }
    public function api()
    {

        $this->load->view("api");
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . "flipkart/");
    }
}
