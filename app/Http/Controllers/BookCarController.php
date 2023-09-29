<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookCarController extends Controller
{
    public function index()
    {
        $bookingUsers = Booking::query()->paginate(10);

        return view('admin.bookings.index', compact('bookingUsers'));
    }

    public function add()
    {
        return view('admin.bookings.add');
    }

    public function store(CreateBookingRequest $request)
    {
        Booking::query()->create($request->validated());

        return back()->with('success', 'Thêm mới thành công');
    }

    public function edit(Booking $booking)
    {
        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(Booking $booking, UpdateBookingRequest $request)
    {
        $booking->update($request->validated());

        return back()->with('success', 'Sửa thành công');
    }

    public function delete(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('admin.booking.index')->with('success', 'Xóa thành công');
    }
}
