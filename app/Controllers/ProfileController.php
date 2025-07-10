<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
        return view('v_profile');
    }

    public function update()
    {
        $userModel = new \App\Models\UserModel();
        $username = session()->get('username'); // Make sure you store 'id' in session on login

        if (!$username) {
            return redirect()->to('/login')->with('error', 'You must be logged in to update your profile.');
        }

        $data = [
            'username' => $this->request->getPost('fullName'),
            'email'    => $this->request->getPost('email'),
            // Add other fields as needed
        ];

        // If handling file upload for profile image
        $file = $this->request->getFile('foto');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('img/user/', $newName);
            $data['foto'] = $newName;
            session()->set('foto', $newName); // Update session
        }

        $userModel->where('username', $username)->set($data)->update();

        // Update session data
        session()->set('username', $data['username']);
        session()->set('email', $data['email']);
        if (isset($data['foto'])) {
            session()->set('foto', $data['foto']);
        }

        return redirect()->to('/profile')->with('success', 'Profile updated!');
    }

    public function changePassword()
    {
        $username = session()->get('username');
        if (!$username) {
            return redirect()->to('/login')->with('error', 'You must be logged in.');
        }

        $currentPassword = $this->request->getPost('currentPassword');
        $newPassword     = $this->request->getPost('newPassword');
        $renewPassword   = $this->request->getPost('renewPassword');

        // Validate new passwords match
        if ($newPassword !== $renewPassword) {
            return redirect()->back()->with('error', 'New passwords do not match.');
        }

        $userModel = new \App\Models\UserModel();
        $user = $userModel->where('username', $username)->first();

        // Verify current password
        if (!$user || !password_verify($currentPassword, $user['password'])) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }

        // Update password
        $userModel->where('username', $username)->set([
            'password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ])->update();

        return redirect()->to('/profile')->with('success', 'Password changed successfully!');
    }
}
