<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Booking; // Đảm bảo rằng bạn đã import model Booking

class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('admin.bookings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('admin.bookings.index')->with('success', 'Đặt xe đã được tạo thành công.');
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->update($request->all());

        return redirect()->route('admin.bookings.index')->with('success', 'Đặt xe đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Đặt xe đã được xóa thành công.');
    }
}
