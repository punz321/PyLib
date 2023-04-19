from sys import maxsize
# A naive recursive implementation
# of 0-1 Knapsack Problem

# Returns the maximum value that
# can be put in a knapsack of
# capacity W


def knapSack(W, wt, val, n):

	# Base Case
	if n == 0 or W == 0:
		return 0

	# If weight of the nth item is
	# more than Knapsack of capacity W,
	# then this item cannot be included
	# in the optimal solution
	if (wt[n-1] > W):
		return knapSack(W, wt, val, n-1)

	# return the maximum of two cases:
	# (1) nth item included
	# (2) not included
	else:
		return max(
			val[n-1] + knapSack(
				W-wt[n-1], wt, val, n-1),
			knapSack(W, wt, val, n-1))
##########################################################################################################################################

# Python3 Program for Floyd Warshall Algorithm
 
# Number of vertices in the graph
V = 4
 
# Define infinity as the large
# enough value. This value will be
# used for vertices not connected to each other
INF = 99999
 
# Solves all pair shortest path
# via Floyd Warshall Algorithm
 
 
def floydWarshall(graph):
    """ dist[][] will be the output
       matrix that will finally
        have the shortest distances
        between every pair of vertices """
    """ initializing the solution matrix
    same as input graph matrix
    OR we can say that the initial
    values of shortest distances
    are based on shortest paths considering no
    intermediate vertices """
 
    dist = list(map(lambda i: list(map(lambda j: j, i)), graph))
 
    """ Add all vertices one by one
    to the set of intermediate
     vertices.
     ---> Before start of an iteration,
     we have shortest distances
     between all pairs of vertices
     such that the shortest
     distances consider only the
     vertices in the set
    {0, 1, 2, .. k-1} as intermediate vertices.
      ----> After the end of a
      iteration, vertex no. k is
     added to the set of intermediate
     vertices and the
    set becomes {0, 1, 2, .. k}
    """
    for k in range(V):
 
        # pick all vertices as source one by one
        for i in range(V):
 
            # Pick all vertices as destination for the
            # above picked source
            for j in range(V):
 
                # If vertex k is on the shortest path from
                # i to j, then update the value of dist[i][j]
                dist[i][j] = min(dist[i][j],
                                 dist[i][k] + dist[k][j]
                                 )
    printSolution(dist)
 
 
# A utility function to print the solution
def printSolution(dist):
    print("Following matrix shows the shortest distances\
 between every pair of vertices")
    for i in range(V):
        for j in range(V):
            if(dist[i][j] == INF):
                print("%7s" % ("INF"), end=" ")
            else:
                print("%7d\t" % (dist[i][j]), end=' ')
            if j == V-1:
                print()


######################################################################################################

# Python3 program for Bellman-Ford's
# single source shortest path algorithm.
 
# The main function that finds shortest
# distances from src to all other vertices
# using Bellman-Ford algorithm. The function
# also detects negative weight cycle
# The row graph[i] represents i-th edge with
# three values u, v and w.
def BellmanFord(graph, V, E, src):
 
    # Initialize distance of all vertices as infinite.
    dis = [maxsize] * V
 
    # initialize distance of source as 0
    dis[src] = 0
 
    # Relax all edges |V| - 1 times. A simple
    # shortest path from src to any other
    # vertex can have at-most |V| - 1 edges
    for i in range(V - 1):
        for j in range(E):
            if dis[graph[j][0]] + \
                   graph[j][2] < dis[graph[j][1]]:
                dis[graph[j][1]] = dis[graph[j][0]] + \
                                       graph[j][2]
 
    # check for negative-weight cycles.
    # The above step guarantees shortest
    # distances if graph doesn't contain
    # negative weight cycle. If we get a
    # shorter path, then there is a cycle.
    for i in range(E):
        x = graph[i][0]
        y = graph[i][1]
        weight = graph[i][2]
        if dis[x] != maxsize and dis[x] + \
                        weight < dis[y]:
            print("Graph contains negative weight cycle")
 
    print("Vertex Distance from Source")
    for i in range(V):
        print("%d\t\t%d" % (i, dis[i]))
 



########################################------------------------------------------------------------


# Python code to implement the
# matrix chain multiplication using recursion
 
import sys
 
# Matrix A[i] has dimension p[i-1] x p[i]
# for i = 1..n
def MatrixChainOrder(p, i, j):
    if i == j:
        return 0
 
    _min = sys.maxsize
 
    # Place parenthesis at different places
    # between first and last matrix,
    # recursively calculate count of multiplications
    # for each parenthesis placement
    # and return the minimum count
    for k in range(i, j):
 
        count = (MatrixChainOrder(p, i, k)
                 + MatrixChainOrder(p, k + 1, j)
                 + p[i-1] * p[k] * p[j])
 
        if count < _min:
            _min = count
 
    # Return minimum count
    return _min


from typing import List

def longest_common_subsequence(str1: str, str2: str) -> str:
	subsequences1 = generate_subsequences(str1)
	subsequences2 = generate_subsequences(str2)
	lcs = ""
	for subsequence1 in subsequences1:
		for subsequence2 in subsequences2:
			if subsequence1 == subsequence2 and len(subsequence1) > len(lcs):
				lcs = subsequence1
	return lcs

def generate_subsequences(s: str) -> List[str]:
	subsequences = []
	generate_subsequences_helper(s, "", 0, subsequences)
	return subsequences

def generate_subsequences_helper(s: str, subsequence: str, index: int, subsequences: List[str]) -> None:
	if index == len(s):
		subsequences.append(subsequence)
		return
	generate_subsequences_helper(s, subsequence, index + 1, subsequences)
	generate_subsequences_helper(s, subsequence + s[index], index + 1, subsequences)

########################################################################################################3

# A naive Python implementation of LIS problem


# Global variable to store the maximum
global maximum


# To make use of recursive calls, this function must return
# two things:
# 1) Length of LIS ending with element arr[n-1]. We use
# max_ending_here for this purpose
# 2) Overall maximum as the LIS may end with an element
# before arr[n-1] max_ref is used this purpose.
# The value of LIS of full array of size n is stored in
# *max_ref which is our final result
def _lis(arr, n):

	# To allow the access of global variable
	global maximum

	# Base Case
	if n == 1:
		return 1

	# maxEndingHere is the length of LIS ending with arr[n-1]
	maxEndingHere = 1

	# Recursively get all LIS ending with
	# arr[0], arr[1]..arr[n-2]
	# If arr[i-1] is smaller than arr[n-1], and
	# max ending with arr[n-1] needs to be updated,
	# then update it
	for i in range(1, n):
		res = _lis(arr, i)
		if arr[i-1] < arr[n-1] and res+1 > maxEndingHere:
			maxEndingHere = res + 1

	# Compare maxEndingHere with overall maximum. And
	# update the overall maximum if needed
	maximum = max(maximum, maxEndingHere)

	return maxEndingHere



def lis(arr):

	# To allow the access of global variable
	global maximum

	# Length of arr
	n = len(arr)

	# Maximum variable holds the result
	maximum = 1

	# The function _lis() stores its result in maximum
	_lis(arr, n)
	return maximum

