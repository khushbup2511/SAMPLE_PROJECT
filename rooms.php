<?php
// Fetch room data from the database
$sql = "SELECT * FROM rooms LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-lg-3 col-md-6">
            <div class="hp-room-item set-bg" data-setbg="<?php echo $row['image_url']; ?>">
                <div class="hr-text">
                    <h3><?php echo $row['name']; ?></h3>
                    <h2><?php echo $row['price']; ?>$<span>/Pernight</span></h2>
                    <!-- Other room details -->
                    <a href="#" class="primary-btn">More Details</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No rooms found";
}
?>