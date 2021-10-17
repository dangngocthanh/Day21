<?php

namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(object $customer)
    {
        $sql = "INSERT INTO customers(name, email, address) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->email);
        $statement->bindParam(3, $customer->address);
        return $statement->execute();
    }

    public function select()
    {
        $sql = "select * from customers  ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function get($id)
    {
        $sql = "select * from customers where id=?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        return $statement->fetch();
    }

    public function update($id,$customer)
    {
        $sql = "update customers set name=?,address=?,email=? where id=?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer['name']);
        $statement->bindParam(2, $customer['address']);
        $statement->bindParam(3, $customer['email']);
        $statement->bindParam(4, $id);
        $statement->execute();
    }
}