<h1> Electronics Shop</h1>

<h2><a href="https://www.hackerrank.com/challenges/electronics-shop/problem">Here's the challenge :</h2>

A person wants to determine the most expensive computer keyboard and USB drive that can be purchased with a give budget. Given price lists for keyboards and USB drives and a budget, find the cost to buy them. If it is not possible to buy both items, return -1.

**Input Format :**

- The first line contains three space-separated integers <i>b, n, and m;</i> the budget, the number of keyboard models and the number of USB drive models.
- The second line contains <i>n</i> space-separated integers keyboards[i], the prices of each keyboard model.
- The third line contains <i>m</i> space-separated integers drives[i], the prices of the USB drives.

**Function Description :**

Complete the getMoneySpent function in the editor below.

getMoneySpent has the following parameter(s):
- int keyboards[n]: the keyboard prices
- int drives[m]: the drive prices
- int b: the budget

**Returns :**

- int: the maximum that can be spent, or -1 if it is not possible to buy both items

**Example :**

  - b = 60
  - keyboards = [40,50,60]
  - drives = [5,8,12]

The person can buy a **40 keyboard + 12 USB drive = 52** or a **50 keyboard + 8 USB drive**. Choose the latter as the more expensive option and return **58**

**Constraints :**
- 1 &#8804; n,m  &#8804; 1000
- 1 &#8804; b &#8804; 10<sup>6</sup>
- The price of each item is in the inclusive range [1,10<sup>6</sup>]
