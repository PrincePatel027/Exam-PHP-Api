<?php

    class Config {
        private $HOST_NAME = "localhost";
        private $USER_NAME = "root";
        private $PASSWORD = "";
        private $DB_NAME = "exam";
        public $connection;

        function initConnection() {
            $this->connection = mysqli_connect($this->HOST_NAME,$this->USER_NAME,$this->PASSWORD,$this->DB_NAME);
        }

        // Users 
        function addUser($name,$age) {
            $this->initConnection();
            $query = "INSERT INTO user(name,age) VALUES ('$name',$age)";
            $res = mysqli_query($this->connection, $query);
            return  $res;
        }

        function fetchAllUsers() {
            $this->initConnection();
            $query = "SELECT * FROM user";
            return mysqli_query($this->connection,$query);
        }
        
        function fetchSingleUser($id) {
            $this->initConnection();
            $query = "SELECT * FROM user WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }
        
        function updateUser($id,$name,$age) {
            $this->initConnection();
            $query = "UPDATE user SET name='$name', age=$age WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

        function deleteUser($name) {
            $this->initConnection();
            $query = "DELETE FROM user WHERE name='$name'";
            return mysqli_query($this->connection,$query);
        }



        // parkings
        function addParking($parkingName,$parkingLocation) {
            $this->initConnection();
            $query = "INSERT INTO parkings(parking_name,parking_location) VALUES ('$parkingName','$parkingLocation')";
            $res = mysqli_query($this->connection, $query);
            return  $res;
        }

        function fetchAllParkings() {
            $this->initConnection();
            $query = "SELECT * FROM parkings";
            return mysqli_query($this->connection,$query);
        }
        
        function fetchSingleParking($id) {
            $this->initConnection();
            $query = "SELECT * FROM parkings WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }
        
        function updateParking($id,$name,$parking_location) {
            $this->initConnection();
            $query = "UPDATE parkings SET parking_name='$name', parking_location='$parking_location' WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

        function deleteParking($id) {
            $this->initConnection();
            $query = "DELETE FROM parkings WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }


        // vehicle Types
        function addVehicle($name,$price) {
            $this->initConnection();
            $query = "INSERT INTO vehicletype(name,price) VALUES ('$name',$price)";
            $res = mysqli_query($this->connection, $query);
            return  $res;
        }

        function fetchAllVehicle() {
            $this->initConnection();
            $query = "SELECT * FROM vehicletype";
            return mysqli_query($this->connection,$query);
        }
        
        function fetchSingleVehicle($id) {
            $this->initConnection();
            $query = "SELECT * FROM vehicletype WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }
        
        function updateVehicle($id,$name,$price) {
            $this->initConnection();
            $query = "UPDATE vehicletype SET name='$name', price=$price WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

        function deleteVehicle($id) {
            $this->initConnection();
            $query = "DELETE FROM vehicletype WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }


        // parking_floor

        function addParkingFloor($floorNumber,$parking_id) {
            $this->initConnection();
            $query = "INSERT INTO parking_floor(floor_number,parking_id) VALUES ($floorNumber,$parking_id)";
            $res = mysqli_query($this->connection, $query);
            return  $res;
        }

        function fetchAllParkingFloor() {
            $this->initConnection();
            $query = "SELECT * FROM parking_floor";
            return mysqli_query($this->connection,$query);
        }
        
        function fetchSingleParkingFloor($id) {
            $this->initConnection();
            $query = "SELECT * FROM parking_floor WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }
        
        function updateParkingFloor($id,$floor_number,$parking_id) {
            $this->initConnection();
            $query = "UPDATE parking_floor SET floor_number='$floor_number', price=$parking_id WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

        function deleteParkingFloor($id) {
            $this->initConnection();
            $query = "DELETE FROM parking_floor WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }


        // park vehicle
        function parkVehicle($parking_id,$parking_floor_id,$user_id,$vehicle_type_id) {
            $this->initConnection();
            $query = "INSERT INTO park_vehicle(parking_id, parking_floor_id,user_id,vehicle_type_id) VALUES ($parking_id, $parking_floor_id,$user_id,$vehicle_type_id)";
            $res = mysqli_query($this->connection, $query);
            return  $res;
        }

        function fetchAllParkedVehicles() {
            $this->initConnection();
            $query = "SELECT * FROM park_vehicle";
            return mysqli_query($this->connection,$query);
        }
        
        function fetchSingleParkedVehicles($id) {
            $this->initConnection();
            $query = "SELECT * FROM park_vehicle WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }
        
        function updateParkedVehicle($id, $parking_id,$parking_floor_id,$user_id,$vehicle_type_id) {
            $this->initConnection();
            $query = "UPDATE park_vehicle SET parking_id=$parking_id, parking_floor_id=$parking_floor_id,user_id=$user_id,vehicle_type_id=$vehicle_type_id WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

        function deleteParkedVehicle($id) {
            $this->initConnection();
            $query = "DELETE FROM park_vehicle WHERE id=$id";
            return mysqli_query($this->connection,$query);
        }

    }

?>