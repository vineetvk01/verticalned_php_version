Unit Balancer
Write a program to sort a set of given units and output a single relationship equation among the units in descending order of size. The input given will be a series of comma separated units and a set of relationship equations between them. From these equations, you are expected to derive a single relationship equation in descending order of the units, with the largest unit on the left. Further, the following are given:

The number of equations given will be 1 less than the number of units given

To keep it simple, only units that can be expressed as integer multiples of each other should be considered. Meaning, the equations must not contain fractional multipliers

Input
First line contains name of all the units separated by comma - no spaces
If there are  units in the above line then there will be  lines in the input that defines relation between the quanitites. The input format of the relationship between the units is - 
 where  is the string that denotes unit on the left hand side of the eqquation , then followed by the space is the = symbol , then followed by space is an integer value  and then followed by space is the string  that denotes unit on the right hand side.

Output

In the output you need to print a single string that denotes relation between all the units in the descending order of their value as per  the sample output.

Constraints

Sample Input
day,hour,second,minute
day = 24 hour
hour = 60 minute
minute = 60 second
Sample Output
1day = 24hour = 1440minute = 86400second