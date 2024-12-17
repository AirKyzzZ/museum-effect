<?php
require 'vendor/autoload.php';

use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()->build();

$query = $_GET['q'];

$params = [
    'index' => 'your_index_name',
    'body' => [
        'query' => [
            'multi_match' => [
                'query' => $query,
                'fields' => ['title', 'content'],
            ],
        ],
    ],
];

$response = $client->search($params);

$results = [];
foreach ($response['hits']['hits'] as $hit) {
    $results[] = $hit['_source'];
}

echo json_encode($results);
?>