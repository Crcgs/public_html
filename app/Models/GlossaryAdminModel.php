<?php

namespace App\Models;

use CodeIgniter\Model;

class GlossaryAdminModel extends Model
{
    protected $table = 'glossary';
    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $allowedFields = [
        'word',
        'dictionary'
    ];

    protected $useTimestamps = false;

    // Get all glossary records
    public function getGlossaries()
    {
        return $this->orderBy('word', 'ASC')->findAll();
    }

    // Get glossary by ID
    public function getGlossary($id)
    {
        return $this->find($id);
    }

    // Add glossary
    public function addGlossary()
    {
        return $this->insert([
            'word' => inputPost('word'),
            'dictionary' => inputPost('dictionary')
        ]);
    }

    // Update glossary
    public function updateGlossary($id)
    {
        return $this->update($id, [
            'word' => inputPost('word'),
            'dictionary' => inputPost('dictionary')
        ]);
    }

    // Delete glossary
    public function deleteGlossary($id)
    {
        return $this->delete($id);
    }

    // Search glossary
    public function searchGlossary($keyword)
    {
        return $this->like('word', $keyword)
                    ->orLike('dictionary', $keyword)
                    ->orderBy('word', 'ASC')
                    ->findAll();
    }


    public function importCSVBatch($filePath)
{
    $rows = [];

    if (($handle = fopen($filePath, 'r')) !== false) {

        // Skip the header row
        fgetcsv($handle);

        while (($data = fgetcsv($handle, 10000, ",")) !== false) {

            // Skip empty rows
            if (empty(trim($data[0])) && empty(trim($data[1]))) {
                continue;
            }

            $rows[] = [
                'word'       => trim($data[0]),
                'dictionary' => trim($data[1])
            ];
        }

        fclose($handle);
    }

    if (empty($rows)) {
        return false;
    }

    return $this->insertBatch($rows);
}
}