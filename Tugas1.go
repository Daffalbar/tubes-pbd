package main

import "fmt"

func hitung(t, u, a int)  int {
	return (t*30 + u*30 + a*40 + 50) / 100


}

func huruf(n int) string {
	switch {
	case n >= 80:
		return "A"
	case n >= 70:
		return "B"

	case n >= 60:
		return "C"
	case n >= 50:
		return "D"
	default:

		return "E"
	}
}

func main() {
	var nama string
	var t, u, a int

	fmt.Print("Nama: ")
	fmt.Scan(&nama)

	fmt.Print("Nilai Tugas: ")
	fmt.Scan(&t)

	fmt.Print("Nilai UTS: ")
	fmt.Scan(&u)

	fmt.Print("Nilai UAS: ")
	fmt.Scan(&a)

	na := hitung(t, u, a)


	nh := huruf(na)

	fmt.Println("\nNama Mahasiswa:", nama)

	fmt.Println("Nilai Akhir:", na)


	fmt.Println("Nilai Huruf:", nh)
}