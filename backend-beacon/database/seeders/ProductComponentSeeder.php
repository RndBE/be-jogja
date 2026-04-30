<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductComponent;
use App\Models\ComponentSpec;
use Illuminate\Database\Seeder;

class ProductComponentSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::pluck('id', 'slug');

        // Define all components per product slug
        $map = $this->getComponentMap();

        foreach ($map as $productSlug => $components) {
            if (!isset($products[$productSlug])) continue;
            $pid = $products[$productSlug];

            foreach ($components as $sortIdx => $comp) {
                $pc = ProductComponent::create([
                    'product_id' => $pid,
                    'name' => $comp['name'],
                    'type' => $comp['type'],
                    'image_1' => $comp['image_1'] ?? null,
                    'image_2' => $comp['image_2'] ?? null,
                    'sort_order' => $sortIdx + 1,
                ]);

                $specs = $comp['specs'] ?? [];
                foreach ($specs as $i => $s) {
                    ComponentSpec::create([
                        'product_component_id' => $pc->id,
                        'category' => $s['category'],
                        'spec_name' => $s['spec_name'],
                        'spec_value' => $s['spec_value'],
                        'sort_order' => $s['sort_order'] ?? ($i + 1),
                    ]);
                }
            }
        }
    }

    private function bl110(string $img1 = null, string $img2 = null): array
    {
        return [
            'name' => 'BL Logger 110', 'type' => 'Logger',
            'image_1' => $img1 ?? 'seri_perangkat/gambar1/1748404066_BL-110.png',
            'image_2' => $img2 ?? 'seri_perangkat/gambar2/1748572147_3.png',
            'specs' => ComponentSpecData::bl110Specs(),
        ];
    }

    private function bl1100(): array
    {
        return [
            'name' => 'BL Logger 1100', 'type' => 'Logger',
            'image_1' => 'seri_perangkat/gambar1/1748404047_BL-1100.png',
            'image_2' => 'seri_perangkat/gambar2/1748572132_4.png',
            'specs' => ComponentSpecData::bl1100Specs(),
        ];
    }

    private function sensor(string $name, string $img1, string $img2, array $specs): array
    {
        return ['name' => $name, 'type' => 'Sensor', 'image_1' => $img1, 'image_2' => $img2, 'specs' => $specs];
    }

    private function s(string $cat, string $name, string $val, int $order): array
    {
        return ['category' => $cat, 'spec_name' => $name, 'spec_value' => $val, 'sort_order' => $order];
    }

    private function getComponentMap(): array
    {
        $MP = 'Measurement and Performance';
        $ED = 'Environmental & Durability';
        $MC = 'Materials & Construction';
        $DC = 'Data & Communication';
        $MH = 'Mechanical Performance';
        $EC = 'Electrical & Control Features';
        $CD = 'Construction & Design';
        $PO = 'Performance & Operation';
        $PC = 'Power and Connectivity';

        return [
            // ===== WATER SECURITY =====
            'be-wlr-100-r700' => [
                $this->bl110(),
                $this->sensor('Water Level Sensor R700',
                    'seri_perangkat/gambar1/1748416093_r700 (2).png',
                    'seri_perangkat/gambar2/1748416093_r700.png', [
                    $this->s($MP, 'Sensor type', '26 GHz High-Frequency Radar Level Sensor', 1),
                    $this->s($MP, 'Range', 'Max 70 meters', 2),
                    $this->s($MP, 'Data Resolution', 'accuracy aprox. 15 mm', 3),
                    $this->s($MP, 'Object Detection', 'Liquid surface, pole, free-running surfaces, works well in dusty environments', 4),
                    $this->s($MP, 'Operating Temperature', '-40 to 482°F (-40 to 250°C)', 5),
                    $this->s($ED, 'Packaging', 'Rugged, reliable in wet/dirty environments', 6),
                    $this->s($ED, 'Temperature Range', '-40 to 482°F (-40 to 250°C)', 7),
                    $this->s($ED, 'Humidity', '0 to 100% operating', 8),
                    $this->s($ED, 'Protection Rating', 'IP67, Explosion-proof: Exia II C T6 Ga', 9),
                    $this->s($MC, 'Case material', 'corrosion-resistant radar usage', 10),
                    $this->s($MC, 'Transducer Type', 'Radar (non-contact), 26 GHz', 11),
                    $this->s($DC, 'Output Protocols', 'Modbus, ASCII streaming', 12),
                    $this->s($DC, 'Output Format', 'Configurable serial (9600–115200 baud, 8 data bits, 1 stop bit, no parity)', 13),
                    $this->s($DC, 'Transducer Frequency', '26 GHz', 14),
                ]),
            ],
            'be-wlr-100-td100' => [
                $this->bl110(),
                $this->sensor('Water Level Sensor TD100',
                    'seri_perangkat/gambar1/1748417163_td100.png',
                    'seri_perangkat/gambar2/1748415973_td100 (2).png', [
                    $this->s($MP, 'Sensor type', 'Pressure Water Level Sensor', 1),
                    $this->s($MP, 'Range', '0.5 – 100 meters', 2),
                    $this->s($MP, 'Data Resolution', 'Approx. ≤0.003% F.S. (~0.086 mm)', 3),
                    $this->s($MP, 'Response Time', '≤10 ms', 4),
                    $this->s($MP, 'Object Detection', 'measures pressure', 5),
                    $this->s($MP, 'Operating Temperature', '-40 to 176°F (-40 to 80°C)', 6),
                    $this->s($ED, 'Packaging', 'Fixed cable with vented tube; waterproof (IP68)', 7),
                    $this->s($ED, 'Temperature Range', '-40 to 176°F (-40 to 80°C)', 8),
                    $this->s($ED, 'Humidity', '0 to 100% operating', 9),
                    $this->s($ED, 'Protection Rating', 'IP68; lightning protection (>8000V)', 10),
                    $this->s($MC, 'Case material', '316L Stainless Steel', 11),
                    $this->s($DC, 'Output Protocols', 'RS485 Modbus RTU, SDI-12, 4–20 mA', 12),
                    $this->s($DC, 'Output Format', 'Modbus registers, SDI-12 ASCII format', 13),
                ]),
            ],
            'be-wlr-100-u014' => [
                $this->bl110(),
                $this->sensor('Water Level Sensor U014',
                    'seri_perangkat/gambar1/1748328688_14 (2).png',
                    'seri_perangkat/gambar2/1748328688_14.png', [
                    $this->s($MP, 'Sensor type', 'Ultrasonic Water Level US-150-5M', 1),
                    $this->s($MP, 'Range', '0.1 - 3 meters (max.4 meters)', 2),
                    $this->s($MP, 'Dead Band', '< 4 in. (100 mm)', 3),
                    $this->s($MP, 'Beam Width', '6° ± 1° off-axis @ -3 dB', 4),
                    $this->s($MP, 'Data Resolution', '0.0034 in. (0.086 mm) per count', 5),
                    $this->s($MP, 'Response Time', 'Ready time < 1 second after power application', 6),
                    $this->s($MP, 'Object Detection', 'liquid surface, flat or curved objects', 7),
                    $this->s($MP, 'Operating Temperature', '-40 to 158 F (-40 to 70 C)', 8),
                    $this->s($ED, 'Packaging', 'Rugged for reliable performance in wet or dirty environments', 9),
                    $this->s($ED, 'Temperature Range', '-40 to 158°F (-40 to 70°C)', 10),
                    $this->s($ED, 'Humidity', '0 to 100% operating', 11),
                    $this->s($ED, 'Protection Rating', 'NEMA-4X, NEMA-6P, IP68', 12),
                    $this->s($MC, 'Case material', '316 stainless steel', 13),
                    $this->s($MC, 'Transducer Type', 'Ruggedized Piezoelectric', 14),
                    $this->s($DC, 'Output Protocols', 'Modbus, ASCII streaming', 15),
                    $this->s($DC, 'Transducer Frequency', '50 kHz', 16),
                    $this->s($DC, 'Temperature Compensation', 'Selectable', 17),
                ]),
            ],
            'be-wlr-100-u150' => [
                $this->bl110(),
                $this->sensor('Water Level Sensor U150',
                    'seri_perangkat/gambar1/1748328737_150 (2).png',
                    'seri_perangkat/gambar2/1748328737_150.png', [
                    $this->s($MP, 'Sensor type', 'Ultrasonic Water Level Sensor U150', 1),
                    $this->s($MP, 'Range', '0.31 - 10 meters (max. 15 meters)', 2),
                    $this->s($MP, 'Dead Band', '< 11 in. (303 mm)', 3),
                    $this->s($MP, 'Beam Width', '6° ± 1° off axis @ -3db', 4),
                    $this->s($MP, 'Data Resolution', '0.0135 in. (0.343 mm) per count', 5),
                    $this->s($MP, 'Response Time', 'Ready time < 1 second after power application', 6),
                    $this->s($MP, 'Object Detection', 'liquid surface, flat or curved objects', 7),
                    $this->s($MP, 'Operating Temperature', '-40 to 158 F (-40 to 70 C)', 8),
                    $this->s($ED, 'Packaging', 'Rugged for reliable performance in wet or dirty environments', 9),
                    $this->s($ED, 'Protection Rating', 'NEMA-4X, NEMA-6P, IP68', 10),
                    $this->s($MC, 'Case material', '316 stainless steel', 11),
                    $this->s($MC, 'Transducer Type', 'Ruggedized Piezoelectric', 12),
                    $this->s($DC, 'Output Protocols', 'Modbus, ASCII streaming', 13),
                    $this->s($DC, 'Transducer Frequency', '50 kHz', 14),
                    $this->s($DC, 'Temperature Compensation', 'Selectable', 15),
                ]),
            ],
            'be-gcm-500-n1' => [
                $this->sensor('Actuator & Gearbox GCM 500-N1',
                    'seri_perangkat/gambar1/1748416066_gcm.png',
                    'seri_perangkat/gambar2/1748416066_gcm (2).png', [
                    $this->s($MH, 'Actuator Torque', '900 Nm', 1),
                    $this->s($MH, 'Gearbox Torque', '1 x 2000 Nm', 2),
                    $this->s($MH, 'Gear Ratio', '6.3 : 1', 3),
                    $this->s($MH, 'Rotational Speed', '63 RPM', 4),
                    $this->s($MH, 'Manual Operation', 'Equipped with a handwheel for emergency use', 5),
                    $this->s($EC, 'Power Supply', '380 VAC / 3 Phase / 50 Hz', 6),
                    $this->s($EC, 'Output Signal', '4–20 mA analog signal for position control', 7),
                    $this->s($EC, 'Display', 'Digital LCD display showing 0–100% gate opening', 8),
                    $this->s($EC, 'Online Control', 'No', 9),
                    $this->s($CD, 'Emergency Access', 'Manual handwheel ensures operation during power failure', 10),
                ]),
            ],
            'be-gcm-500-n2' => [
                $this->sensor('Actuator & Gearbox GCM 500-N2',
                    'seri_perangkat/gambar1/1748416052_gcm.png',
                    'seri_perangkat/gambar2/1748416052_gcm (2).png', [
                    $this->s($MH, 'Actuator Torque', '900 Nm', 1),
                    $this->s($MH, 'Gearbox Torque', '2 x 2000 Nm', 2),
                    $this->s($MH, 'Gear Ratio', '6.3 : 1', 3),
                    $this->s($MH, 'Rotational Speed', '63 RPM', 4),
                    $this->s($MH, 'Manual Operation', 'Equipped with a handwheel for emergency use', 5),
                    $this->s($EC, 'Power Supply', '380 VAC / 3 Phase / 50 Hz', 6),
                    $this->s($EC, 'Output Signal', '4–20 mA analog signal for position control', 7),
                    $this->s($EC, 'Display', 'Digital LCD display showing 0–100% gate opening', 8),
                    $this->s($EC, 'Online Control', 'No', 9),
                ]),
            ],
            'be-wgc-1000-ne' => [
                $this->bl1100(),
                $this->sensor('Actuator & Gearbox 1000-NE',
                    'seri_perangkat/gambar1/1748659373_gcm.png',
                    'seri_perangkat/gambar2/1748659373_gcm (2).png', [
                    $this->s($MH, 'Actuator Torque', '900 Nm', 1),
                    $this->s($MH, 'Gearbox Torque', 'Max 2 x 2000 Nm', 2),
                    $this->s($MH, 'Gear Ratio', '6.3 : 1', 3),
                    $this->s($MH, 'Rotational Speed', '63 RPM', 4),
                    $this->s($MH, 'Manual Operation', 'Equipped with a handwheel for emergency use', 5),
                    $this->s($EC, 'Power Supply', '380 VAC / 3 Phase / 50 Hz', 6),
                    $this->s($EC, 'Output Signal', '4–20 mA analog signal for position control', 7),
                    $this->s($EC, 'Display', 'Digital LCD display showing 0–100% gate opening', 8),
                    $this->s($EC, 'Online Control', 'Yes', 9),
                ]),
            ],
            'be-fmr-100-fs20' => [
                $this->bl1100(),
                $this->sensor('Flowmeter Sensor 1000-FS20',
                    'seri_perangkat/gambar1/1748416026_fs20.png',
                    'seri_perangkat/gambar2/1748416026_fs20 (2).png', [
                    $this->s($MP, 'Sensor type', 'Radar-based flow and water level sensor', 1),
                    $this->s($MP, 'Measuring Principle', 'Planar microstrip array antenna CW+FMCW', 2),
                    $this->s($MP, 'Radar Frequency (Velocity)', '24 GHz', 3),
                    $this->s($MP, 'Velocity Measuring Range', '0.03–20 m/s', 4),
                    $this->s($MP, 'Velocity Measurement Accuracy', '±0.01 m/s; ±2% F.S', 5),
                    $this->s($MP, 'Radar Frequency (Water Level)', '80 GHz', 6),
                    $this->s($MP, 'Water Level Measuring Range', '7 meters', 7),
                    $this->s($MP, 'Measurement Accuracy (Level)', '±2 mm; ±0.05% F.S', 8),
                    $this->s($ED, 'Operating Temperature', '-35 to 70°C', 9),
                    $this->s($ED, 'Lightning Protection', '6KV', 10),
                    $this->s($ED, 'Protection Rating', 'IP68', 11),
                    $this->s($MC, 'Dimension', '160x100x80', 12),
                    $this->s($MC, 'Weight', '1 kg', 13),
                ]),
            ],
            'be-adr-1000-rbt32' => [
                $this->bl1100(),
                $this->sensor('Robotic Total Station RBT32',
                    'seri_perangkat/gambar1/1748416008_ADR.png',
                    'seri_perangkat/gambar2/1748572343_ADR (1).png', [
                    $this->s($MP, 'Sensor type', 'Robotic Total Station with Rotary Absolute Encoder', 1),
                    $this->s($MP, 'Telescope Magnification', '30x', 2),
                    $this->s($MP, 'Angle Accuracy', '1" (0.0003 gon / 0.005 mil)', 3),
                    $this->s($MP, 'Minimum Focus', '1.3 meters (4.3 ft)', 4),
                    $this->s($MP, 'Measurement Range', '1.3 – 3500 meters (4.3 – 11,480 ft)', 5),
                    $this->s($MP, 'Target Type', 'Prism target monitoring', 6),
                    $this->s('Tilt & Compensation', 'Compensation Method', 'Coaxial Phase Shift Measuring System', 7),
                    $this->s('Tilt & Compensation', 'Signal Source', 'Red Laser Diode (690 nm, Class 3R)', 8),
                    $this->s($ED, 'Operating Temperature', '-40 to 70°C', 9),
                    $this->s($ED, 'Humidity', '0–100% (non-condensing)', 10),
                    $this->s($ED, 'Protection Rating', 'Weatherproof standard', 11),
                ]),
            ],
            'be-wqr-1000-mp7' => [
                $this->bl1100(),
                $this->sensor('Water Quality Sensor 1000-MP7',
                    'seri_perangkat/gambar1/1748415991_wqr.png',
                    'seri_perangkat/gambar2/1748415991_wqr (2).png', [
                    $this->s('Depth Measurement', 'Range', '0–61 meter', 1),
                    $this->s('Depth Measurement', 'Accuracy', '±0.3%', 2),
                    $this->s('Depth Measurement', 'Resolution', '2 cm', 3),
                    $this->s('Temperature', 'Range', '0 °C', 4),
                    $this->s('Temperature', 'Resolution', '0.01 °C', 5),
                    $this->s('pH Measurement', 'Range', '0–14 pH', 6),
                    $this->s('pH Measurement', 'Accuracy', '±0.1 pH', 7),
                    $this->s('ORP Measurement', 'Range', '–1000 mV to +1000 mV', 8),
                    $this->s('ORP Measurement', 'Accuracy', '±0.1 mV', 9),
                    $this->s('Conductivity', 'Range', '1 µS/cm–2000 µS/cm (K=1.0); 100 µS/cm–100 mS/cm (K=10.0)', 10),
                    $this->s('Salinity', 'Range', '0–1 ppt (K=1.0); 0–70 ppt (K=10.0)', 11),
                    $this->s('Turbidity', 'Range', '0–1000 NTU', 12),
                    $this->s('Turbidity', 'Accuracy', '±5%', 13),
                    $this->s('Dissolved Oxygen', 'Range', '0–20 mg/L; 0–200% saturation', 14),
                    $this->s('Dissolved Oxygen', 'Accuracy', '±0.1 mg/L (<8 mg/L); ±0.2 mg/L (>8 mg/L)', 15),
                ]),
            ],
            // AVWR - no device series in docs
            // ===== WEATHER FORECAST =====
            'be-rr-100-tb02' => [
                $this->bl110(),
                $this->sensor('Rain Sensor TB02',
                    'seri_perangkat/gambar1/1748328559_4.png',
                    'seri_perangkat/gambar2/1748328559_3.png', [
                    $this->s($MP, 'Data Resolution', '0.2 mm', 1),
                    $this->s($MP, 'Sensor type', 'Magnetic Hall Effect sensor', 2),
                    $this->s($MP, 'Measurement Type', 'Self-emptying tipping bucket', 3),
                    $this->s($MP, 'Accuracy', '±2%', 4),
                    $this->s($ED, 'Bucket Material', 'POM (Polyoxymethylene), anti-stick, easy water release', 5),
                    $this->s($ED, 'Outer Shell Material', 'Styrosun, smooth surface, easy to clean', 6),
                ]),
            ],
            'be-rr-1000-tb02' => [
                $this->bl1100(),
                $this->sensor('Rain Sensor TB02',
                    'seri_perangkat/gambar1/1748328559_4.png',
                    'seri_perangkat/gambar2/1748328559_3.png', [
                    $this->s($MP, 'Data Resolution', '0.2 mm', 1),
                    $this->s($MP, 'Sensor type', 'Magnetic Hall Effect sensor', 2),
                    $this->s($MP, 'Measurement Type', 'Self-emptying tipping bucket', 3),
                    $this->s($MP, 'Accuracy', '±2%', 4),
                    $this->s($ED, 'Bucket Material', 'POM (Polyoxymethylene), anti-stick, easy water release', 5),
                    $this->s($ED, 'Outer Shell Material', 'Styrosun, smooth surface, easy to clean', 6),
                ]),
            ],
            'be-wr-1000-ws80' => [
                $this->bl1100(),
                $this->sensor('Weather Sensor 1000-WS80',
                    'seri_perangkat/gambar1/1748313264_2.png',
                    'seri_perangkat/gambar2/1748313264_1.png', [
                    $this->s('Wind Speed & Direction', 'Range Speed', '0–45 m/s (current/voltage); 0–70 m/s (pulse, RS485)', 1),
                    $this->s('Wind Speed & Direction', 'Range Direction', '0–360°', 2),
                    $this->s('Wind Speed & Direction', 'Accuracy', '±(0.3+0.03V) m/s (speed) & ±3° (direction)', 3),
                    $this->s('Illuminance', 'Range', '0–2000 lux, 0–20 klux, 0–200 klux optional', 4),
                    $this->s('Illuminance', 'Spectral Range', '380–780 nm', 5),
                    $this->s('Temp, Humidity, Pressure', 'Humidity Range', '0–100%RH (Accuracy ±3%RH)', 6),
                    $this->s('Temp, Humidity, Pressure', 'Pressure Range', '10–110kPa (Accuracy ±1hPa)', 7),
                    $this->s('Rainfall', 'Collector Dimension', 'Diameter: φ200mm, Height: 271mm', 8),
                    $this->s('Rainfall', 'Resolution', '0.2 mm', 9),
                    $this->s('Solar Radiation', 'Spectral Range', '300-3200 nm', 10),
                    $this->s('Solar Radiation', 'Range', '0-2000W/m²', 11),
                    $this->s('Solar Radiation', 'Sensitivity', '7-14μV·W⁻¹·m⁻²', 12),
                ]),
            ],
            // ===== EARLY WARNING =====
            'be-ews-100-wl' => [
                $this->bl110(),
                $this->sensor('Early Warning Sensor 100-WL',
                    'seri_perangkat/gambar1/1748328579_1.png',
                    'seri_perangkat/gambar2/1748328579_2.png', [
                    $this->s($PO, 'Warning level', '4-level visual + buzzer alarm', 1),
                    $this->s($PO, 'Sound Pressure Level', '117 dB (1W/1m)', 2),
                    $this->s($PO, 'Frequency Response', '200 – 6,500 Hz', 3),
                    $this->s($PO, 'Rated Input Power', '25W, 15W, 10W, 5W (100V line)', 4),
                    $this->s($PO, 'Lens Colors', 'Red, Yellow, Green, Blue', 5),
                    $this->s($PO, 'LED Stack Levels', '4-tier', 6),
                    $this->s($PC, 'Power Supply', '24V AC/DC', 7),
                    $this->s($PC, 'Connection Type', 'Lead wires', 8),
                    $this->s($PC, 'Mounting', 'Pole mount', 9),
                    $this->s($ED, 'Ingress Protection', 'IP65', 10),
                    $this->s($ED, 'Operating Temperature', '-15°C to 40°C (5°F to 104°F)', 11),
                    $this->s($ED, 'Vibration Resistance', '3mm amplitude at 10–55 Hz', 12),
                    $this->s($MC, 'Tower Light Dimensions', '279 mm (H) x 56 mm (D)', 13),
                    $this->s($MC, 'Horn Dimensions', '500 mm x 477 mm', 14),
                    $this->s($MC, 'Horn Material', 'Aluminum', 15),
                ]),
            ],
            // ===== PRESSURE MEASUREMENT =====
            'be-plr-1000' => [
                $this->bl1100(),
            ],
        ];
    }
}
