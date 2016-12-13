<?php
// Routes

//****************************//
//    WEB TRAFFIC API CALLS   //
//****************************//

$app->get('/node/one/normal', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 1");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 1");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Normal'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/two/normal', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 2");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 2");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Normal'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/three/normal', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 3");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 3");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Normal'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/one/warning', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 1");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 1");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Warning'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/two/warning', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 2");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 2");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Warning'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/three/warning', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 3");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 3");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Warning'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/one/danger', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 1");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 1");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Danger'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/two/danger', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 2");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 2");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Danger'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});

$app->get('/node/three/danger', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT name FROM nodes where count <= 3");
    $sth->execute();
    $nodes = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT source, target FROM connections where count <= 3");
    $sth->execute();
    $connectionsData = $sth->fetchAll();
    $sth = $this->db->prepare("SELECT normal, warning, danger FROM metrics where type = 'Danger'");
    $sth->execute();
    $metrics = array();

    while ($row = $sth->fetch()){
       $metrics = array(
          "normal"=>$row["normal"],
          "warning"=>$row["warning"],
          "danger"=>$row["danger"]
        );
    } 

    $connections = array();
    foreach($connectionsData as $row) {
        array_push($connections,array(
          "source"=>$row["source"],
          "target"=>$row["target"],
          "metrics"=>$metrics
        ));
    }

    return $this->response->withJson(array('renderer' => 'global', 'name' => 'edge', 'nodes' => $nodes, 'connections' => $connections), 200 ,JSON_NUMERIC_CHECK);
});