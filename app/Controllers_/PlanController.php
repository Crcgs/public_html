<?php

namespace App\Controllers;

use App\Models\PlanModel;
use CodeIgniter\HTTP\ResponseInterface;

class PlanController extends BaseController
{
    protected $planModel;

    public function __construct()
    {
        $this->planModel = new PlanModel();
    }

    public function index()
    {
        $data['title'] = trans("index");
        $data['plans'] = $this->planModel->findAll();

         echo view('admin/includes/_header', $data);
        echo view('admin/plans/index', $data);
        echo view('admin/includes/_footer');

        //return view('admin/plans/index', $data);
    }

    public function create() {
        return view('admin/plans/create');
    }

    public function store()
    {
        
        
        $rules = $this->planModel->getValidationRules();
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'plan_name' => $this->request->getPost('plan_name'),
            'plan_price' => $this->request->getPost('plan_price'),
            'plan_duration' => $this->request->getPost('plan_duration'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status') ?? 1,
        ];

        $this->planModel->insert($data);
        return redirect()->to('/admin/plans')->with('success', 'Plan created successfully');
    }

    public function edit($id = null)
    {
        if ($id === null) {
            return redirect()->to('/admin/plans')->with('error', 'Plan not found');
        }

        $data['plan'] = $this->planModel->find($id);
        
        if ($data['plan'] === null) {
            return redirect()->to('/admin/plans')->with('error', 'Plan not found');
        }

        return view('admin/plans/edit', $data);
    }

    public function update($id = null)
    {
        if ($id === null) {
            return redirect()->to('/admin/plans')->with('error', 'Plan not found');
        }

        $rules = $this->planModel->getValidationRules();
        
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'plan_name' => $this->request->getPost('plan_name'),
            'plan_price' => $this->request->getPost('plan_price'),
            'plan_duration' => $this->request->getPost('plan_duration'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status') ?? 1,
        ];

        $this->planModel->update($id, $data);
        return redirect()->to('/admin/plans')->with('success', 'Plan updated successfully');
    }

    public function delete($id = null)
    {
        if ($id === null) {
            return redirect()->to('/admin/plans')->with('error', 'Plan not found');
        }

        if ($this->planModel->delete($id)) {
            return redirect()->to('/admin/plans')->with('success', 'Plan deleted successfully');
        }

        return redirect()->to('/admin/plans')->with('error', 'Failed to delete plan');
    }

    public function toggleStatus($id = null)
    {
        if ($id === null) {
            return $this->response->setJSON(['success' => false, 'message' => 'Plan not found'])->setStatusCode(404);
        }

        $plan = $this->planModel->find($id);
        
        if ($plan === null) {
            return $this->response->setJSON(['success' => false, 'message' => 'Plan not found'])->setStatusCode(404);
        }

        $newStatus = $plan['status'] == 1 ? 0 : 1;
        $this->planModel->update($id, ['status' => $newStatus]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Status updated successfully',
            'newStatus' => $newStatus
        ]);
    }
} 