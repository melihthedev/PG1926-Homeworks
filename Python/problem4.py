arr = []
for x in range(7):
    n = int(input("Enter a number: "))
    arr.append(n)

highest = arr[0]
for i in arr:
    if (i % 2) == 1:
        if i >= highest:
            highest = i
print(highest)
