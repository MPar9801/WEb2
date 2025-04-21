<?php
require_once 'config.php';

function getFeaturedProducts($limit = 4) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT * FROM products WHERE is_featured = 1 LIMIT ?");
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getNewArrivals($limit = 4) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT * FROM products ORDER BY created_at DESC LIMIT ?");
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getProductById($id) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_assoc();
}

function searchProducts($query) {
    global $conn;
    
    $search = "%" . $query . "%";
    $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE ? OR description LIKE ?");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();
    
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addProduct($name, $description, $price, $category, $is_featured, $image_path) {
    global $conn;
    
    $stmt = $conn->prepare("INSERT INTO products (name, description, price, category, is_featured, image_path, created_at) 
                           VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssdsis", $name, $description, $price, $category, $is_featured, $image_path);
    
    return $stmt->execute();
}

function updateProduct($id, $name, $description, $price, $category, $is_featured, $image_path = null) {
    global $conn;
    
    if ($image_path) {
        $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ?, category = ?, 
                               is_featured = ?, image_path = ? WHERE id = ?");
        $stmt->bind_param("ssdsisi", $name, $description, $price, $category, $is_featured, $image_path, $id);
    } else {
        $stmt = $conn->prepare("UPDATE products SET name = ?, description = ?, price = ?, 
                               category = ?, is_featured = ? WHERE id = ?");
        $stmt->bind_param("ssdsii", $name, $description, $price, $category, $is_featured, $id);
    }
    
    return $stmt->execute();
}

function deleteProduct($id) {
    global $conn;
    
    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    return $stmt->execute();
}

function getAllProducts() {
    global $conn;
    
    $result = $conn->query("SELECT * FROM products ORDER BY created_at DESC");
    return $result->fetch_all(MYSQLI_ASSOC);
}
?>