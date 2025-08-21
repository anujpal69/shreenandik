<?php 
$title = 'coming soon';
$headerBg = '';
include_once './public/lib/common/header.php'; 
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .coming-soon-wrapper {
    background-color: #0f0f0f;
    font-family: 'Alfa Slab One', cursive;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: calc(100vh - 200px); /* Adjust based on header+footer height */
    padding: 50px 20px;
    text-align: center;
  }

  .waviy {
    position: relative;
    font-size: 70px;
    letter-spacing: 5px;
    -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0, 0, 0, 0.3));
  }

  .waviy span {
    position: relative;
    display: inline-block;
    background: linear-gradient(135deg, #ff6ec4, #7873f5);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: waviy 2s infinite;
    animation-delay: calc(0.1s * var(--i));
    text-transform: uppercase;
  }

  @keyframes waviy {
    0%, 40%, 100% {
      transform: translateY(0);
    }
    20% {
      transform: translateY(-20px);
    }
  }

  .btn {
    margin-top: 50px;
    padding: 12px 30px;
    font-size: 18px;
    color: #fff;
    background: linear-gradient(135deg, #ff6ec4, #7873f5);
    border: none;
    border-radius: 30px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 110, 196, 0.4);
  }

  .btn:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(120, 115, 245, 0.5);
  }
</style>

<div class="coming-soon-wrapper">
  <div class="waviy">
    <span style="--i:1">C</span>
    <span style="--i:2">O</span>
    <span style="--i:3">M</span>
    <span style="--i:4">I</span>
    <span style="--i:5">N</span>
    <span style="--i:6">G</span>
    <span style="--i:7">&nbsp;</span>
    <span style="--i:8">S</span>
    <span style="--i:9">O</span>
    <span style="--i:10">O</span>
    <span style="--i:11">N</span>
  </div>
  <!-- <a href="/" class="btn">Back to Home</a> -->
</div>

<?php include_once './public/lib/common/footer.php'; ?>
