<?php

$config = [
    'registration' => [
        [
            'field' => 'register_type', 
            'label' => 'lang:register_type',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_name', 
            'label' => 'lang:outlet_name',
            'rules' => 'required|trim|max_length[75]',
        ], 
        [
            'field' => 'customer_type', 
            'label' => 'lang:customer_type',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'm_businesstype_code', 
            'label' => 'lang:businesstype_code',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_address', 
            'label' => 'lang:outlet_address',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_m_province_id', 
            'label' => 'lang:outlet_province_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_m_regency_id', 
            'label' => 'lang:outlet_regency_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_m_district_id', 
            'label' => 'lang:outlet_district_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_postal_code', 
            'label' => 'lang:outlet_postal_code',
            'rules' => 'required|numeric|trim|min_length[0]|max_length[8]',
        ], 
        [
            'field' => 'outlet_phone', 
            'label' => 'lang:outlet_phone',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'outlet_email', 
            'label' => 'lang:outlet_email',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'is_building_ownership_status', 
            'label' => 'lang:is_building_ownership_status',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'm_omzet_estimation_code', 
            'label' => 'lang:m_omzet_estimation_code',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_name', 
            'label' => 'lang:owner_name',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_address', 
            'label' => 'lang:owner_address',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_m_province_id', 
            'label' => 'lang:owner_province_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_m_regency_id', 
            'label' => 'lang:owner_regency_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_m_district_id', 
            'label' => 'lang:owner_district_id',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_postal_code', 
            'label' => 'lang:owner_postal_code',
            'rules' => 'required|numeric|trim|min_length[0]|max_length[8]',
        ], 
        [
            'field' => 'owner_phone', 
            'label' => 'lang:owner_phone',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_no_ktp', 
            'label' => 'lang:owner_no_ktp',
            'rules' => 'required|trim',
        ], 
        [
            'field' => 'owner_email', 
            'label' => 'lang:owner_email',
            'rules' => 'required|trim',
        ], 
    ],
];