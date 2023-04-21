from Pylib import daa 

#1
valu = [60, 100, 120]
wte = [10, 20, 30]
Ww = 50
nw=3
#print(daa.knapSack(Ww, wte,valu, nw))


#2
INF = 99999
graph = [[0, 5, INF, 10],
        [INF, 0, 3, INF],
        [INF, INF, 0,   1],
        [INF, INF, INF, 0]]
 
#print(daa.floydWarshall(graph))

#3
V = 5 # Number of vertices in graph
E = 8 # Number of edges in graph

# Every edge has three values (u, v, w) where
# the edge is from vertex u to v. And weight
# of the edge is w.
graph = [[0, 1, -1], [0, 2, 4], [1, 2, 3],
        [1, 3, 2], [1, 4, 2], [3, 2, 5],
        [3, 1, 1], [4, 3, -3]]
daa.BellmanFord(graph, V, E, 0)

######------------------------------------------------------------------------------------

#4
arr = [1, 2, 3, 4, 3]
N = len(arr)
print("Minimum number of multiplications is ",daa.MatrixChainOrder(arr, 1, N-1))


####---------------------------------------------------------------------
#5
str1 = "AGGTAB"
str2 = "GXTXAYB"
lcs = daa.longest_common_subsequence(str1, str2)
print("Length of LCS is ", len(lcs))


#----------------------------------------------------------
#6

arr = [10, 22, 9, 33, 21, 50, 41, 60]
n = len(arr)

print ("Length of lis is", daa.lis(arr))


#-------------------------------------------------------------------------
#7
