<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta http-equiv="cache-control" content="no-cache" /> -->
        <title>GETTING STARTED WITH BRACKETS</title>
        <meta name="description" content="Planets shipbuilder utility">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Michroma" />
        <link rel="stylesheet" href="css/shipBuilder.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='js/shipBuilder.js?<?php echo time(); ?>'></script>
    </head>
<body>
    <h1>Ship Builder Utility - Planets</h1>

<div>
    <h2>Hull and Loadout</h2>
    <label class="dropdown">Race</label>
        <select id="races">
            <option>Federation</option>
            <option>Lizards</option>
            <option>Birdmen</option>
            <option>Fascists</option>
            <option>Privateers</option>
            <option>Cyborg</option>
            <option>Crystals</option>
            <option>Evil Empire</option>
            <option>Robots</option>
            <option>Rebels</option>
            <option>Colonies</option>
        </select>
        
    <label class="dropdown">ShipName</label>
        <select id="race_ships">
            <!-- Populate race ship list using JS -->
        </select>
</div>
    
<div>
    <label class="dropdown">Torpedo Load</label>
        <select>
            <option>Empty</option>
            <option># per Tube</option>
            <option>Fixed Number</option>
            <option>Full Load</option>
        </select>
        
        <label class="sub_choice">Number</label><input id="fixed_number" size=3>
        <label class="sub_choice">Per Tube</label><input id="per_tube" size=3>
        
    <label class="dropdown">Fighter Load</label>
        <select>
            <option>Empty</option>
            <option>Full</option>
            <!-- Add more choices based on hull type, using JS -->
        </select>
</div>
        
    <h2>Configuration for:</h2><h3 id="shipname"></h3>
    <label>Engines</label>
        <select>
            <option>StarDrive 1</option>
            <option>StarDrive 2</option>
            <option>StarDrive 3</option>
            <option>SuperStarDrive 4</option>
            <option>Nova 5</option>
            <option>HeavyNova 6</option>
            <option>Quantum 7</option>
            <option>Hyper 8</option>
            <option>Transwarp 9</option>
        </select>
    <label>Beams</label>
        <select>
            <option>Lasers</option>
            <option>X-Rays</option>
            <option>Plasma Bolts</option>
            <option>Blasters</option>
            <option>Positron Beams</option>
            <option>Disruptors</option>
            <option>Heavy Blasters</option>
            <option>Phasers</option>
            <option>Heavy Disruptors</option>
            <option>Heavy Phasers</option>
        </select>
        
    <label>Torpedoes</label>
        <select>
            <option>None</option>
            <option>Mark 1</option>
            <option>Proton</option>
            <option>Mark 2</option>
            <option>Gamma</option>
            <option>Mark 3</option>
            <option>Mark 4</option>
            <option>Mark 5</option>
            <option>Mark 6</option>
            <option>Mark 7</option>
            <option>Mark 8</option>
        </select>
        
    <input type="button" id="add_config" value="Add">
        
    <h2>Cost of Configurations</h2>
    <table id="config_list">
        <tr class="table_header">
            <th>Baseline</th>
            <th>ID</th>
            <th>Engines</th>
            <th>Beams</th>
            <th>Torpedoes</th>
            <th>NumTorps</th>
            <th>NumFighters</th>
            <th>MC</th>
            <th>Supplies</th>
            <th>Dur</th>
            <th>Trit</th>
            <th>Moly</th>
        </tr>
<!-- Add with JS:
        <tr class="table_body">
        </tr>
-->
        </table>
</body>
</html>