
#ifndef WINAPI
    #define WINAPI __stdcall
#endif

typedef unsigned char BYTE;
typedef unsigned long DWORD;
typedef unsigned short WORD;
typedef DWORD COLORREF;
typedef void *PVOID;
typedef PVOID PROC;
typedef PVOID HANDLE;
typedef HANDLE HDC;
typedef unsigned int UINT;
typedef const char *LPCSTR;
typedef float FLOAT;

typedef enum { TRUE, FALSE } BOOL;

typedef struct _POINTFLOAT {
    FLOAT x;
    FLOAT y;
} POINTFLOAT, *PPOINTFLOAT;

typedef struct _GLYPHMETRICSFLOAT {
    FLOAT       gmfBlackBoxX;
    FLOAT       gmfBlackBoxY;
    POINTFLOAT  gmfptGlyphOrigin;
    FLOAT       gmfCellIncX;
    FLOAT       gmfCellIncY;
} GLYPHMETRICSFLOAT,
  *PGLYPHMETRICSFLOAT,
  *LPGLYPHMETRICSFLOAT;

typedef struct tagLAYERPLANEDESCRIPTOR {
  WORD     nSize;
  WORD     nVersion;
  DWORD    dwFlags;
  BYTE     iPixelType;
  BYTE     cColorBits;
  BYTE     cRedBits;
  BYTE     cRedShift;
  BYTE     cGreenBits;
  BYTE     cGreenShift;
  BYTE     cBlueBits;
  BYTE     cBlueShift;
  BYTE     cAlphaBits;
  BYTE     cAlphaShift;
  BYTE     cAccumBits;
  BYTE     cAccumRedBits;
  BYTE     cAccumGreenBits;
  BYTE     cAccumBlueBits;
  BYTE     cAccumAlphaBits;
  BYTE     cDepthBits;
  BYTE     cStencilBits;
  BYTE     cAuxBuffers;
  BYTE     iLayerPlane;
  BYTE     bReserved;
  COLORREF crTransparent;
} LAYERPLANEDESCRIPTOR,
  *PLAYERPLANEDESCRIPTOR,
  *LPLAYERPLANEDESCRIPTOR;

typedef struct {
  int unused;
} HGLRC;
