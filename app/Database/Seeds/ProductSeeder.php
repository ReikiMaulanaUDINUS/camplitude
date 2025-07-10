<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'MOONDROP ARIA',
                'harga' => '1200000',
                'jumlah' => '23',
                'foto' => 'moondrop-aria.jpg',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Driver: LCP liquid crystal diaphragm, 10mm dual cavity 
                            Headphone Port: 0.78pin
                            Sensitivity: 122dB
                            Impedance: 32 ohm
                            Frequency response range: 5Hz-36kHz
                            Effective frequency response: 20Hz-20kHz'
            ],
            [
                'nama' => '7hz SALNOTES ZERO 2',
                'harga' => '400000 	',
                'jumlah' => '60',
                'foto' => '7hz-zero2.jpg',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Driver: 10mm dynamic driver
                            Frequency response range: 10Hz-20KHz
                            Impedance: 32 ohms
                            Total Harmonic Distortion (THD): <1% at 1KHz
                            Cable Interface: 3.5mmPlug Type: Detachable 0.78mm 2Pin'
            ],
            [
                'nama' => 'SIMGOT EW300',
                'harga' => '1600000 	',
                'jumlah' => '25',
                'foto' => 'simgot-ew300.jpg',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Driver: 10mm DD + 6mm Planar Magnetic + PZT
                            Sensitivity: 121 dB
                            Impedance: 28 ohms
                            Connectors: 0.78mm 2-pin
                            Frequency Response Range: 20Hz-20kHz
                            Connectors: 0.78mm 2-pinCable Jack: 3.5mm single-ended, Type-C (DSP Edition With Mic)'
            ],
            [
                'nama' => 'Audio-Technica ATH-M50x',
                'harga' => '2500000 	',
                'jumlah' => '10',
                'foto' => '1751932371_d61bf9d9f9cca9dd5202.jpg',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Type: Closed-back dynamic
                            Driver Diameter: 45 mm
                            Sensitivity: 99 dB
                            Impedance: 38 ohms
                            Frequency Response: 15 - 28,000 Hz
                            Maximum Input Power: 1,600 mW at 1 kHz'
            ],
            [
                'nama' => 'SENNHEISER HD600',
                'harga' => '5000000 	',
                'jumlah' => '10',
                'foto' => '1751933071_170fb635874870847e9d.jpg',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Frequency response: 12 Hz - 40,500 Hz
                            Sensitivity: 97 dB (1 V)Impedance: 300 Ω
                            Total harmonic distortion (THD): < 0,1 % (1 kHz, 1 V)
                            Cable length: 3 mAdapter: 3.5 mm stereo jack plug
                            Transducer principle: dynamic, open
                            Weight: 260 g'
            ],
            [
                'nama' => 'Sony WH-1000XM6',
                'harga' => '7500000 	',
                'jumlah' => '3',
                'foto' => '1752076553_2d1e8ca083136c9900d9.webp',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Type: Closed-back 
                            Magnet: Neodymium 
                            Driver: 30mm 
                            Sensitivity: 103 dB/mW 
                            Impedance: 48 ohm 
                            Frequency Response: 4hz - 40khz 
                            Input: mini stereo jack 
                            Jack: L shaped, gold-plated 
                            Battery life: 30 hours (NC on) - 40 hours 
                            Bluetooth: 5.3 Audio format: SBC, AAC, LDAC'
            ],
            [
                'nama' => 'Sony WF-1000XM5',
                'harga' => '4400000 	',
                'jumlah' => '15',
                'foto' => '1752076868_b722a1eb0db8ce6d16cf.webp',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'HEADPHONE TYPE: Closed, dynamic DSEE Extreme: Yes FREQUENCY RESPONSE (BLUETOOTH® COMMUNICATION): 20–20,000 Hz (44.1 kHz sampling) | 20–40,000 Hz (LDAC 96 kHz sampling 990 kbps) AMBIENT SOUND MODE: Yes MULTIPOINT CONNECTION: Yes DRIVER UNIT: 0.33'
            ],
            [
                'nama' => 'Taotronics SoundLiberty 79',
                'harga' => '1100000',
                'jumlah' => '34',
                'foto' => '1752077342_85f0fa6a805184ee2ec2.webp',
                'created_at' => date("Y-m-d H:i:s"), 
                'updated_at' => date("Y-m-d H:i:s"),
                'ket' => 'Case dimensions: 2.6 x 1.6 x 1.1 inches Case weight: 1.3oz Earbud weight: approx. 0.17oz Connectivity: Bluetooth 5.0 (up to 30m/98ft) Playtime: 8 hours per charge, 28 hours total between case charges Codec: SCB,AAC'
            ],            
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}
