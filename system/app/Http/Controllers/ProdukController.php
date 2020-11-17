<?php 


namespace App\Http\Controllers;
use App\Models\Produk;

/**
 * 
 */
class ProdukController extends Controller
{
	
	function index()
	{
		$data['list_produk'] = Produk::all();
		return view('admin/produk/index', $data);
	}
	
	function create()
	{
		return view('admin/produk/create');
	}
	
	function store()
	{
		$produk = new Produk;
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil di Tambahkan');
	}
	
	function show(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('admin/produk/show', $data);
	}
	
	function edit(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('admin/produk/edit', $data);
		
	}
	
	function update(Produk $produk)
	{
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil di Update');
	}
	
	function destroy(Produk $produk)
	{
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil di Hapus');
	}
}