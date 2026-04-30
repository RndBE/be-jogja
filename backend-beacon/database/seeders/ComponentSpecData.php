<?php

namespace Database\Seeders;

/**
 * Shared spec templates for product components.
 * Extracted to reduce duplication since BL-110 and BL-1100 loggers are reused across many products.
 */
class ComponentSpecData
{
    public static function bl110Specs(): array
    {
        return [
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Internet Connection', 'spec_value' => '4G Wireless Router, LAN ports, Wi-Fi transmission channel', 'sort_order' => 1],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Communication Ports', 'spec_value' => '1x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE)', 'sort_order' => 2],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Data Download', 'spec_value' => 'Supports local Wi-Fi connection', 'sort_order' => 3],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Positioning System', 'spec_value' => 'Integrated GPS Module for location tracking', 'sort_order' => 4],
            ['category' => 'Processing & Memory', 'spec_name' => 'Processor', 'spec_value' => 'STM32F407xx (Arm Cortex 32-bit)', 'sort_order' => 5],
            ['category' => 'Processing & Memory', 'spec_name' => 'Clock Speed', 'spec_value' => 'Up to 168 MHz', 'sort_order' => 6],
            ['category' => 'Processing & Memory', 'spec_name' => 'Memory', 'spec_value' => 'SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB', 'sort_order' => 7],
            ['category' => 'Input & Output', 'spec_name' => 'Digital I/O', 'spec_value' => '2', 'sort_order' => 8],
            ['category' => 'Input & Output', 'spec_name' => 'Analog Input', 'spec_value' => '2 Channels', 'sort_order' => 9],
            ['category' => 'Input & Output', 'spec_name' => 'ADC Resolution', 'spec_value' => '16-bit', 'sort_order' => 10],
            ['category' => 'Input & Output', 'spec_name' => 'Support Multisensor', 'spec_value' => 'Not recommended', 'sort_order' => 11],
            ['category' => 'Power Supply & Regulation', 'spec_name' => 'Operating Input Voltage', 'spec_value' => '10 - 24 VDC', 'sort_order' => 12],
            ['category' => 'Power Supply & Regulation', 'spec_name' => 'Built-in DC Regulator Output', 'spec_value' => '5VDC, 12VDC, and 24VDC (for various sensor power supply)', 'sort_order' => 13],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Operating Temperature', 'spec_value' => '-40 to +85°C', 'sort_order' => 14],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Enclosure Material', 'spec_value' => 'Flame-resistant ABS', 'sort_order' => 15],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Dimension', 'spec_value' => '125.6 x 45 x 155.6 mm', 'sort_order' => 16],
            ['category' => 'Display & Data Handling', 'spec_name' => 'Display', 'spec_value' => '16x2 character LCD with green LED backlight', 'sort_order' => 17],
            ['category' => 'Display & Data Handling', 'spec_name' => 'Data Format', 'spec_value' => 'Excel (CSV File)', 'sort_order' => 18],
        ];
    }

    public static function bl1100Specs(): array
    {
        return [
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Internet Connection', 'spec_value' => '4G Wireless Router, LAN ports, Wi-Fi transmission channel', 'sort_order' => 1],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Communication Ports', 'spec_value' => '2x Serial Data RS232, 1x Modbus RS485, 1x USB Port, 1x Ethernet Port (TCP/IP), 1x DB9 Serial Port, 1x Type-C Port, Dual Mode Bluetooth (Classic and BLE)', 'sort_order' => 2],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Data Download', 'spec_value' => 'Supports local Wi-Fi connection', 'sort_order' => 3],
            ['category' => 'Connectivity & Communication', 'spec_name' => 'Positioning System', 'spec_value' => 'Integrated GPS Module for location tracking', 'sort_order' => 4],
            ['category' => 'Processing & Memory', 'spec_name' => 'Processor', 'spec_value' => 'STM32F407xx (Arm Cortex 32-bit)', 'sort_order' => 5],
            ['category' => 'Processing & Memory', 'spec_name' => 'Clock Speed', 'spec_value' => 'Up to 168 MHz', 'sort_order' => 6],
            ['category' => 'Processing & Memory', 'spec_name' => 'Memory', 'spec_value' => 'SRAM 192 KB; Backup SRAM 4 KB; Flash Memory up to 1 MB; SD Card support up to 16 GB', 'sort_order' => 7],
            ['category' => 'Input & Output', 'spec_name' => 'Analog Input', 'spec_value' => '8 Channels', 'sort_order' => 8],
            ['category' => 'Input & Output', 'spec_name' => 'Digital I/O', 'spec_value' => '4', 'sort_order' => 9],
            ['category' => 'Input & Output', 'spec_name' => 'ADC Resolution', 'spec_value' => '16-bit', 'sort_order' => 10],
            ['category' => 'Input & Output', 'spec_name' => 'Support Multisensor', 'spec_value' => 'Yes', 'sort_order' => 11],
            ['category' => 'Power Supply & Regulation', 'spec_name' => 'Operating Input Voltage', 'spec_value' => '10 - 24 VDC', 'sort_order' => 12],
            ['category' => 'Power Supply & Regulation', 'spec_name' => 'Built-in DC Regulator Output', 'spec_value' => '5VDC, 12VDC, and 24VDC (for various sensor power supply)', 'sort_order' => 13],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Operating Temperature', 'spec_value' => '-40 to +85°C', 'sort_order' => 14],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Enclosure Material', 'spec_value' => 'Flame-resistant ABS', 'sort_order' => 15],
            ['category' => 'Environmental & Durability', 'spec_name' => 'Dimension', 'spec_value' => '125 x 44 x 205.6 mm', 'sort_order' => 16],
            ['category' => 'Display & Data Handling', 'spec_name' => 'Display', 'spec_value' => '20 x 4 character LCD with green LED backlight', 'sort_order' => 17],
            ['category' => 'Display & Data Handling', 'spec_name' => 'Data Format', 'spec_value' => 'Excel (CSV File)', 'sort_order' => 18],
        ];
    }

    public static function bl110Images(): array
    {
        return [
            'image_1' => 'seri_perangkat/gambar1/1748404066_BL-110.png',
            'image_2' => 'seri_perangkat/gambar2/1748572147_3.png',
        ];
    }

    public static function bl1100Images(): array
    {
        return [
            'image_1' => 'seri_perangkat/gambar1/1748404047_BL-1100.png',
            'image_2' => 'seri_perangkat/gambar2/1748572132_4.png',
        ];
    }
}
