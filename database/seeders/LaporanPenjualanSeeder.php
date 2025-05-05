<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Barang;
use App\Models\User;

class LaporanPenjualanSeeder extends Seeder
{
    public function run()
    {
        // Buat beberapa user
        $users = User::factory()->count(5)->create();
        $barangs = Barang::factory()->count(5)->create();
    
        // Buat 10 order dengan user acak
        for ($i = 0; $i < 10; $i++) {
            $user = $users->random();
            $order = Order::create([
                'user_id' => $user->id,
                'total' => 0,
                'status' => 'completed',
            ]);
    
            $total = 0;
            foreach ($barangs->random(2) as $barang) {
                $qty = rand(1, 5);
                $price = $barang->price;
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'barang_id' => $barang->id,
                    'quantity' => $qty,
                    'price' => $barang->price,
                ]);
                $total += $qty * $price;
            }
            $order->update(['total' => $total]);
        }
    }
}