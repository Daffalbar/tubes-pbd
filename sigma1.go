package main

import "fmt"

func main() {
	var s string
	fmt.Scan(&s)
	wow := reverse(s)
	fmt.Println(wow)
}

func reverse (s string) string {
	if (len(s) <= 1) {
		return s
	}
	return reverse(s[1:]) + s[:1]
}
