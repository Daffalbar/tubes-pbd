package main

import "fmt"

func biaya(jam int) float64 {
	if jam <= 0 {
		return 0
	}
	total := 5000.0
	if jam > 1 {
		total += float64(jam-1) * 3000
	}
	return total
}

func diskon(total float64, jam int) float64 {
	
	if jam > 5 {
		return total * 0.10
	}
	return 0
}

func main() {
	var kendaraan string
	var jam int

	fmt.Print("Kendaraan: ")
	fmt.Scan(&kendaraan)

	fmt.Print("Lama Parkir: ")
	fmt.Scan(&jam)

	total := biaya(jam)
	pot := diskon(total, jam)
	bayar := total - pot

	fmt.Println("Kendaraan:", kendaraan)
	fmt.Println("Lama Parkir:", jam, "jam")
	fmt.Printf("Total Biaya Parkir: %.0f\n", bayar)
}